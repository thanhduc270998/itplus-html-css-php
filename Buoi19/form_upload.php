<?php
/**
xử lí upload file với form
 **/
// Xử lí submit form
// DEbug $_GET
// chú ý
// Nếu form có input upload file , bắt buộc form đó phải khai báo 2 thông tin sau:
// method = POST
// Thêm enctype = 'multipart/form-data'
//DEBUG

// giải thích về $_FILES
// mảng 2 chiều
// - các key :
// name: tên + đuôi file
// type: định dạng file
// tmp_name: đường dẫn tạm mà XAMPP tạo ra để lưu file
// error
// 0-> không có lỗi , file đc upload vào thư mục tạm
// thành công
// 1- file upload vượt quá dung lượng cho phép trong cấu hình hệ thống
// 2,3,4
// chỉ cần quan tâm đến giá trị = 0, nếu error = 0 thì xử lí upload , ngược lại thì thôi
// size: dung lượng file upload , đơn vị là byte B
// 1 MB = 1024Kb = 1024*1024B
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";

// TẠO BIẾN CHỨA LỖI VÀ KQ
$error = '';
$result = '';
// kiểm tra nếu submit form thì mới xử lí
if(isset($_POST['submit'])){
    // gán biến trung gian để thao tác cho dễ
    $name = $_POST['name'];
    $avatar_arr = $_FILES['avatar']; // mảng 1 chiều
    // validate form
    // name ko đc để trống : empty
    // file upload phải là ảnh
    // file upload dung lượng ko vượt quá 2MB
    if(empty($name)) {
        $error ='Phải nhập tên';
    }
    // khhi xử lí file luôn phải kiểm tra nếu có upload file thành công thì mới thao tác ,
    // luôn phải dựa vào error , nếu = 0 thì mới xử lý
    elseif ($avatar_arr['error'] == 0){
        // validate file upload phải là ảnh, dựa vào đuôi file
        // + lấy đuôi file từ tên file cho trước
        $extension = pathinfo($avatar_arr['name'] , PATHINFO_EXTENSION); // PATHINFO_EXTENSION lấy đuôi file
        var_dump($extension);
        // chuyển đổi đuôi file về chữ thường
        $extension = strtolower($extension);
        // tạo mảng chứa danh sách các đuôi file ảnh hượp lệ
        $extension_allow = ['png' , 'jpg' , 'jpeg' , 'gif'];
        if (!in_array($extension,$extension_allow)){
            // in_array dùng để kiểm tra xem mảng con có trong mảng to hay k

            $error = "phải upload file ảnh";
        }
        // validate file upload dung lượng < 2mb
        $file_size_b = $avatar_arr['size'];
        // chuyển về đơn vị MB 1Mb = 1024kb = 1024 * 1024B
        $file_size_mb = $file_size_b / 1024 /1024;
        // làm tròn giá trị cho đẹp
        $file_size_mb = round($file_size_mb, 2);
        var_dump($file_size_mb);
        if ($file_size_mb > 2){
            $error = 'file upload ko đc vượt quá 2MB';
        }
    }
// hiển thị thông tin và upload file  nếu ko có lỗi xảy ra
 //   if(!$error);
    if (empty($error)){
        $result .= "Tên: $name <br />";
        // xử lí upload file , hiển thị thông tin file ra form
        if ($avatar_arr['error'] == 0){
            // tạo thư mục sẽ upload file vào, tạo thư mục uploads ngang hàng với file hiện tại (ko tạo bằng tay), cần tạo bằng code
            $dir_upload = "uploads";
            // Cần kiểm tra nếu thư mục chưa tồn tại thì mới tạo
            if (!file_exists($dir_upload)){
                mkdir($dir_upload);
            }
            //cần tạo ra tên file mang tính duy nhất để tránh ghi đè file với các file trùng tên
            // sd thàm time() để lấy thời gian mang tính duy nhất -> trả về số giây từ thời điểm hiện tại so với mốc 01-01-1970
            $filename = time() . "-" .$avatar_arr['name'];
            var_dump($filename);
            // chuyển file từ thư mục tạm -> thư mục gốc
            $is_upload = move_uploaded_file($avatar_arr['tmp_name'],
            $dir_upload. "/". $filename);
            var_dump($is_upload);
            // hiển thị thông tin file ra màn hình
            // hiển thị ảnh vừa upload
            $result .= "<img src='$dir_upload/$filename' height='100px'> <br />";
            $result .= "Tên file: {$avatar_arr['name']} <br />";
            $extension = pathinfo($avatar_arr['name'] , PATHINFO_EXTENSION);
            $result .= "Đuôi file: $extension <br />";
            $result .= "Đường dẫn tạm: {$avatar_arr['tmp_name']} <br />";
            $result .= "Mã lỗi: {$avatar_arr['error']} <br />";
            $file_size_mb = round($avatar_arr['size'] / 1024 /1024 , 2);
            $result .= "Dung lượng: $file_size_mb MB";
        }
    }
}
?>
<h3 style="color: red"><?php echo $error; ?></h3>
<h3 style="color: green"><?php echo $result; ?></h3>
<form action="" method="post" enctype="multipart/form-data">
    Tên:
    <input type="text" name="name" value="">
    <br>
    Ảnh đại diện :
    <input type="file" name="avatar">
    <br>
    <input type="submit" name="submit">
</form>
