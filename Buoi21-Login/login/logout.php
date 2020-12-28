<?php
session_start();
/**
*Xử lí logout: xóa hết session, chuyển hướng về form login
 */
// xóa cookie liên quan đến chức năng ghi nhớ đăng nhập
setcookie('username','',time() -1);
setcookie('password','',time() -1);
// xóa các session tạo ra khi login thành công
//unset($_SESSION['success']);
unset($_SESSION['username']);
$_SESSION['success'] = 'Đăng xuất thành công';
// ko nên dùng hàm session_destroy
header('Location: form_login.php');
exit();
?>