<?php
/***
    form.php
 * là nơi nhập liệu
 * có 2 dạng nhập : nhập dữ liệu cơ bản và dạng nhập dưới đang upload file
 * + khi user gửi thông tin / submit form-> dữ liệu đc gửi lên server / file.php
 * PHP dựa vào thuộc tính name của inpit để biết đc chính xác dữ liệu đó là từ input nào gửi lên
 * Có kĩ thuật khác mà k cần dùng form vẫn lấy đc dữ liệu từ user -> ajax
 *
 */
// khai báo form HTML

?>
<!--
action: url/file nhận dữ liệu từ form gửi lên
nếu giá trị là chuỗi rỗng -> chính url/file khaibáo ra form sẽ nhận đc dữ liệu từ form
method: phương thức truyền dữ liệu lên php
post: truyền ngầm dữ liệu , bảo mật hơn GET, php tạo ra sẵn 1 biến kiểu mảng là $_POST chứa thông tin dữ liệu gửi lên từ form
-GET: truyền dữ liệu lên URL
GET KO DÙNG CHO CÁC input chưa thông tin nhạy cảm
URL dạng GET: abc.php?fullname=abc&age=20
-->
<?php
//demo với method form = post -> $_POST
echo "<pre>";
print_r($_GET);
echo "</pre>";
// biến toàn cục $_REQUEST: chứa thông tin của $_POST , $_GET và $_COOKIE , ko nên dùng biến này để lấy dữ liệu từ form, cần dựa method của form để dùng $_POST hoặc $_GET cho phù hợp

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
// Biến mảng $_SERVER: chứa các thông tin về webserver hiện tại
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
// cách khai báo name cho input form: với các input chỉ lưu đc 1 giá trị tại 1 thời điểm -> đặt name ở dạng biến đơn thông thường, ngược lại , cần đặt name ở dạng biến mảng
?>
<form action="" method="post">
    Nhập text: <input type="text" name=""> <br>
    Password: <input type="password" name="password"> <br>
    Checkbox:
    <input type="checkbox" name="checkbox[]" value="1">CB 1
    <input type="checkbox" name="checkbox[]" value="2">CB 2
    <input type="checkbox" name="checkbox[]" value="3">CB 3
    <br>
    Radio:
    <input type="radio" name="radio" value="1"> RD1
    <input type="radio" name="radio" value="2"> RD2
    <input type="radio" name="radio" value="3"> RD3
    <br>
    File: <input type="file" name="file"> <br>
    Multiple file <input type="text" name="file[]">
    <br>
    <select name="select" id="">
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
    </select>
    <select name="select[]" multiple>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
    </select>
    <br>
    <textarea name="" id="" cols="30" rows="10"></textarea> <br>
    <input type="submit" name="submit" value="Test">
</form>
<form action="" method="GET">
    Nhập tên:
    <input type="text" name="fullname" value="">
    <br>
    Nhập tuổi:
    <input type="number" name="age" value="">
    <br>
    <input type="submit" name="submit" value="Show">
</form>
