<?php
/***

 form1.php*/
// các bước xử lý submit form
// CODE PHP xử lí submit form đặt trc khai báo HTML form
// debug  bieén liên quan đến form : $_POST
echo "<pre>";
print_r($_POST);
echo "</pre>";
// Tạo các biến chứa lỗi và kết quả
$error = '';
$result = '';
// chỉ xử lý submit nếu user click vào nút submit, vì khi đó mới lất đc các giá trị từ form trở lên
// kiểm tra xem có tồn tại phần tử mảng nào có key trùng với name của nút submit hay k: isset
if(isset($_POST['submit']) == TRUE){
// tạo biến trung gian để thao tác cho dễ
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    // validate form: rất quan trọng , ktra dữ liệu từ ng dùng, nếu có lỗi thì đổ vào biến $error
    // vallidate form bằng PHP là bắt buộc phải có , kể cả đã validate form = JS từ trc
    // tất cả các trường ko đc để trống : empty
    // tên phải ít nhất 3 ký tự : strlen
    // tuổi phải là số: is_numeric
    // email phải đúng định dạng: filter
    if(empty($fullname) || empty($age) || empty($email)){
        $error = 'Phải nhập tất cả các trường';
    }elseif (strlen($fullname) < 3){
        $error = 'Tên ít nhất 3 ký tự';
    } elseif (!is_numeric($age)){
        $error = 'Tuổi phải là số';
    } elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error = 'Email chưa đúng định dạng';
    }
    // xử lí logic bài toán chỉ khi ko có lỗi nào xảy ra
    if(empty($error)){
        $result .= "Tên: $fullname <br />";
        $result .= "Tuổi: $age <br />";
        $result .= "Email: $email <br />";
    }
}

?>
<!--Hiển thị error và result ra màn hình-->
<h3 style="color: red"> <?php echo $error; ?></h3>
<h3 style="color: blue"> <?php echo $result; ?></h3>

<form action="" method="post">
    Nhập tên:
    <input type="text" name="fullname" value="<?php echo isset($_POST['fullname'])?
    $_POST['fullname'] : '';
    ?>"> <br>
    Nhập tuổi:
    <input type="text" name="age" value=""> <br>
    Nhập email:
    <input type="text" name="email" value=""> <br>
    <input type="submit" name="submit" value="show"> <br>
</form>
