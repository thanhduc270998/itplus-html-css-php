<h1>Tính diện tích & chu vi hình tròn</h1>
<form action="" method="POST">
    Nhập vào đường kính hình tròn:
    <br>
    <input type="text" name="duongkinh" placeholder="Nhập đường kính">
    <input type="submit" name="cv_ht">
    <input type="submit" name="dt_ht">
</form>
<?php
$PI = 3.14;
$duongkinh = $_POST['duongkinh'];
$bankinh = $duongkinh/2;
$cv_ht = $duongkinh * $PI;
$dt_ht = pow($bankinh,2)* $PI;
?>

