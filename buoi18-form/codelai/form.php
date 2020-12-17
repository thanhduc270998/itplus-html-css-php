<?php
if(isset($_POST['submit'])){
    $error = '';
    $result = '';
    $username = $_POST['username'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    if(empty($username) || empty($age) || empty($email)){
    $error = 'Phải nhập đầy đủ thông tin';
    }elseif (strlen($username) < 3){
        $error = 'Kí tự của username phải lớn hơn 3';
    }elseif (!is_numeric($age)){
        $error = 'Tuổi phải là số';
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error = 'Chưa đúng định dạng email';
    }
    if (empty($error)){
        $result .= "Tên của bạn là: $username <br />";
        $result .= "Tuổi của bạn là: $age <br />";
        $result .= "email của bạn là: $email";
    }
}
?>
<p style="color: red"><?php echo $error?></p>
<p style="color: blue"><?php echo $result?></p>
<form action="" method="post">
    Nhập tên:
    <input type="text" name="username" value="<?php echo isset($_POST['username'])?
    $_POST['username'] : '';

        ?>">
    <br>
    Nhập tuổi:
    <input type="text" name="age">
    <br>
    Nhập email:
    <input type="text" name="email">
    <br>
    <input type="submit" name="submit" value="show">

</form>
