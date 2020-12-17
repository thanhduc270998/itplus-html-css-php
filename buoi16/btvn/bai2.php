<?php

    $width = $_POST['width'];
    $btn_dt = $width * $width;
    $btn_cv = $width * 4;

?>
<h1>Tính diện tích & chu vi hình vuông</h1>
<form action="" method="POST" enctype="multipart/form-data">
    Nhập cạnh hình vuông:
    <br>
    <input type="text" name="width" placeholder="Nhập độ dài cạnh">
    <br>
    <input type="submit" value="Diện tích hình vuông" name="btn_dt">
    <br>
    <input type="submit" value="Chu vi hình vuông "name="btn_cv">


</form>
<?php if(isset($_POST['btn_cv'])): ?>
<p style="color: blue"><?php echo "Chu vi hình vuông là: $btn_cv mét"?></p>

<?php endif;?>
<?php if(isset($_POST['btn_dt'])): ?>
    <p style="color: blue"><?php echo "Diện tích hình vuông là: $btn_dt mét vuông"?></p>

<?php endif;?>