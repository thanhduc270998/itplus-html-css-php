<?php
session_start();
/***
 * form login/form_login.php
 * Demo chức năng đăng nhập đơn giản
 * login/form_login.php: form đăng nhập
 *      /logout.php: xử lí đăng xuất
 *      /wellcome.php: hiển thị thông báo sau khi đăng nhập thành công
 */
//Xử lí nếu đăng nhập rồi thì k cho truy cập form login nữa
if(isset($_SESSION['username'])){
    $_SESSION['success'] = 'Bạn đã đăng nhập rồi';
    header('Location: wellcome.php');
    exit();
}
//xử lí nếu có cookie username -> đăng nhập thành công
if(isset($_COOKIE['username'])){
    $_SESSION['username'] = $_COOKIE['username'];
    $_SESSION['success'] = 'Tự động login';
    header('Location: wellcome.php');
    exit();
}

// Mô tả: nếu username > 3 kí tự -> đăng nhập thành công
// Xử li submit form
//Debug
echo "<pre>";
print_r($_POST);
echo "</pre>";
// tạo biến chứa lỗi
$error ='';
// Nếu user submit form thì mới xử lí
if (isset($_POST['login'])){
    // Tạo biến trung gian
    $username = $_POST['username'];
    $password = $_POST['password'];
    // validate form:
    //Username và password không đc ddể trống
    if(empty($username) || empty($password)){
        $error = 'Username/Password không được để trống';
    }
    // Xử lí logic login chỉ khi không có lỗi
    if(empty($error)){
        //login thành công khi username > 3 kí tự
        if(strlen($username) > 3){
            // lưu cookie username và password khi login thành công nếu user có tích vào ghi nhớ đăng nhập
            if(isset($_POST['remember'])){
                setcookie('username', $username, time() + 3600);
                setcookie('password', $password, time() + 3600);
            }

            // đăng nhập thành công , chuyển hướng tới file wellcome.php , hiển thị 1 messager " Đăng nhập thành công " tại file đó
            // trước khi chuyển hướng , tạo session lưu message
            $_SESSION['success'] = 'Đăng nhập thành công';
            $_SESSION['username'] = $username;
            header('Location: wellcome.php');
            exit();
        } else {
            $error = 'Sai tài khoản hoặc mật khẩu';
        }
    }
}
?>
<h3 style="color: green">
    <?php
    if (isset($_SESSION['success'])){
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }
    ?>
</h3>
<h3 style="color: red"><?php echo $error;?></h3>
<form action="" method="post">
    Username: <input type="text" name="username" value="">
    <br>
    Password:
    <input type="password" name="password" value="">
    <br>
    <input type="checkbox" name="remember" value="1">
    Ghi nhớ đăng nhập
    <br>
    <input type="submit" name="login" value="Login">
</form>
