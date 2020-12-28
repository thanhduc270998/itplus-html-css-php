<?php
session_start();
/**
*login/welcome
 **/
// kiểm tra nếu chưa login thì cho truy cập vào file này,dựa vào key username
if(!isset($_SESSION['username'])){
    $_SESSION['error'] = 'Bạn cần đăng nhập';
    header('Location: form.php');
}
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
<h3 style="color: red">
    <?php
    if(isset($_SESSION['error'])){
        echo $_SESSION['username'];
        // hiển thị xong xóa luôn ->session dạng flash
        unset($_SESSION['error']);
    }
    ?>
<h3 style="color: green">
    <?php
    if(isset($_SESSION['success'])){
        echo $_SESSION['username'];
        // hiển thị xong xóa luôn ->session dạng flash
        unset($_SESSION['success']);
    }
    ?>
</h3>
<b>Chào bạn, <?php $_SESSION['username']; ?></b>
<a href="logout.php">Logout</a>
