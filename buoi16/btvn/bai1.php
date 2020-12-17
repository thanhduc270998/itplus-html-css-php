<?php
    $d = $_POST['d'];
    $r = $_POST['r'];
    $chuvi = ($d + $r)*2;
    $dientich = $d*$r;



?>
<h1>Tính diện tích & chu vi hình chữ nhật</h1>
<form action="" method="POST" enctype="multipart/form-data">
    Chiều dài:
    <br>
    <input type="text" name="d" placeholder="Nhập chiều dài">
    <br>
    Nhập chiều rộng:
    <br>
    <input type="text" name="r" placeholder="Nhập chiều rộng">
    <br>
    <input type="submit" value="Diện tích hình chữ nhật" name="btn_dt">
    <br>
    <input type="submit" value="Chu vi hình chữ nhật" name="btn_cv">


</form>
<?php if (isset($_POST['btn_cv'])):?>

    <p style="color: blue"><?php echo "Chu vi hình chữ nhật là : $chuvi" ?></p>;
<?php endif; ?>
<?php if (isset($_POST['btn_dt'])):?>
    <p style="color: red"><?php echo "Dien tich hình chữ nhật là : $dientich" ?></p>
<?php endif; ?>
