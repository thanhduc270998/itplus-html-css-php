<?php
session_start();
require_once 'database.php';
/**
*Là chức năng dựng đầu tiên của CRUD , tạo dữ liệu cho các chức năng còn lại sd
 * Form thêm mới sp:
 * products: id , name , price , avatar , created_at
 * Chỉ hiển thị input với trường thêm thủ công
 */
// XỬ LÝ SUBMIT FORM
//Debug: $_POST , $_FILES
echo "<pre>";
print_r($_FILES);
print_r($_POST);
echo "</pre>";
// Tạo biến chứa lỗi
$error = '';
//Nếu submit thì mới xử lí
if (isset($_POST['submit'])){
    // Gán biến
    $name = $_POST['name'];
    $price = $_POST['price'];
    $avatar_arr = $_FILES['avatar'];
    // Validate form
    // File upload phải là ảnh , dung lượng <= 2mb
    if(empty($name) || empty($price)){
        $error = 'Tên hoặc giá phải nhập';
    } elseif ($avatar_arr['error'] == 0){
        // Validate file phải là ảnh
        $extension = pathinfo($avatar_arr['name'] , PATHINFO_EXTENSION);
        // Chuyển về chữ thường
        $extension = strtolower($extension);
        // Tạo mảng đuôi file ảnh hợp lệ
        $allowed = ['jpg', 'jpeg' , 'png' , 'gif'];
        if (!in_array($extension, $allowed)){
            $error = 'File upload phải là ảnh';
        }
        // Validate file upload dung lượng <= 2mb
        // 1MB = 1024KB = 1024 * 1024 B
        $size_mb = $avatar_arr['size'] / 1024 / 1024;
        $size_mb = round($size_mb, 2);
        if ($size_mb > 2){
            $error = 'File upload dung lượng phải <= 2MB';
        }

        // Lưu vào CSDL chỉ khi ko có lỗi xảy ra
        if (empty($error)){
            // Tạo biến chứa tên file
            $avatar = '';
            // Xử lí upload file nếu có
            if ($avatar_arr['error'] == 0){
                // Tạo thư mục chứa file sẽ upload vào
                $dir_upload = 'uploads';
                // Luôn check nếu chưa tồn tại thư mục thì mới tạo
                if (!file_exists($dir_upload)) {
                    mkdir($dir_upload);
                }
                //Sinh tên file mang tính duy nhất trc khi upload, để tránh ghi đè file trùng tên
                $avatar = time() . '-' . $avatar_arr['name'];
                var_dump($avatar);
                // upload file
                move_uploaded_file($avatar_arr['tmp_name'], $dir_upload . "/" . $avatar);
            }
        }
        // Xử lí lưu vào bảng products
        //Viết truy vấn
        $sql_insert = "INSERT INTO products(name, price , avatar)VALUES('$name', $price, '$avatar')";
        // Thực thi truy vấn:
        $is_insert = mysqli_query($connection, $sql_insert);
        var_dump($is_insert);
        if ($is_insert){
            // Hiển thị thông báo ở trang khác: ds sản phẩm
            $_SESSION['success'] = ' Thêm mới sản phẩm thành công';
            //Chuyển hướng về trang dssp
            header('Location: index.php');
            exit();
        } else{
            $error = 'Thêm thất bại';
        }
    }
}
?>
<h3 style="color: red"><?php  echo $error;?></h3>
<h1>Form thêm mới sp</h1>
<form action="" method="post" enctype="multipart/form-data">
    Nhập tên: <input type="text" name="name" value="">
    <br>
    Nhập giá:
    <input type="number" name="price" value="">
    <br>
    Ảnh sp:
    <input type="file" name="avatar">
    <br>
    <input type="submit" name="submit" value="Lưu">
    <a href="index.php">Back</a>
</form>