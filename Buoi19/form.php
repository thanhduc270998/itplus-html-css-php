<?php
/***

 form.php
 Xử lí inputradio , checkbox, select
 */
// Debug biến liên quan
echo "<pre>";
print_r($_POST);
echo "</pre>";
// tạo biến chứa lỗi và kết quả
$error = '';
$result = '';
// kiểm tra nếu submit form r thì mới xử lý đc
if (isset($_POST['submit'])){
    // tạo và gán biến trung gian
    // gán kiểu sau chưa an toàn
//    $gender = $_POST['gender'];
//    $jobs = $_POST['jobs'];
    $country = $_POST['country'];
    $description = $_POST['description'];
    // thử test ko nhập / k chọin gì -> submit form -> bị lỗi
    // do trong code đang thao tác với key k tồn tại của mảng $_POST
    // với radio/checkbox , luôn cần phải kiểm tra nếu tồn tại key thì mới thao tác đc để tránh case ko tích vào radio/checkbox nào-> dùng hàm isset
    // validate form:
    // gender và checkbox bắt buộc phải tích
    if(!isset($_POST['gender'])){
        $error = 'Phải chọn giới tính';
    }elseif (!isset($_POST['jobs'])){
        $error = 'Phải chọn nghề nghiệp';
    }
    // xử lí logic hiển thị thông tin form chỉ khi không có lỗi xảy ra
    if(empty($error)){
        // hiển thị giới tính, có thể gán trung đc vì đã xử lí vallidate ko tồn tại r
        $gender = $_POST['gender'];
        $result .= "Giới tính vừa chọn: ";
        switch ($gender){
            case 1: $result .= "Nam"; break;
            case 2: $result .= "Nữ"; break;
            case 3: $result .= "Khác";
        }
        // hiển thị nghề nghiệp
        $jobs = $_POST['jobs'];
        $result .= "<br /> Nghề nghiệp:";
        foreach ($jobs AS $job){

                // chú ý break trong switch case chỉ thoát khỏi switch case , không thoát foreach
            switch ($job){
                case 1: $result .= "Dev"; break;
                case 2: $result .= "Tester"; break;
                case 3: $result .= "BA";
            }
        }
        // Hiển thị quốc gia:
        $result .= "<br />Quốc gia: ";

            switch ($country){
                case 1: $result .= "VN";break;
                case 2: $result .= "USA";break;
                case 3: $result .= "JP";
            }
        // hiển thị mô tả thêm: textarea
        $result .= " <br />Mô tả thêm: $description";
    }
}
?>
<!--Hiển thị error và result ra form-->
<h3 style="color: red"><?php echo $error; ?></h3>
<h3 style="color: green"><?php echo $result; ?></h3>
<!--Đổ dữ liệu ra form-->
<form action="" method="post">
Chọn giới tính:
<!--    // với radio cần khai báo value để PHP biết đc radio vừa chọn là gì-->
    <?php
    // đổ lại dữ liệu cho radio vào thuộc tính checked
    // có bao nhiêu radio tạo bấy nhiêu biến để set checked
    $gender_male ='';
    $gender_female ='';
    $gender_another ='';
    if (isset($_POST['gender'])){
        $gender = $_POST['gender'];
        switch ($gender){
            case 1: $gender_male = 'checked';break;
            case 2: $gender_female = 'checked';break;
            case 3: $gender_another = 'checked';
        }
    }
    ?>
    <input type="radio" name="gender" value="1"
    <?php echo $gender_male; ?> />Nam
    <input type="radio" name="gender" value="2"
    <?php echo $gender_female; ?> />Nữ
    <input type="radio" name="gender" value="3"
    <?php echo $gender_another?>; />Khác

    <br>
    Chọn nghề nghiệp:
<!--    Với checkbox, nếu có >=2 checkbox thì name bắt buộc phải ở dạng mảng
check box dựa vòa value để gửi dữ liệu lên PHP-->
    <?php
    // đổ lại dữ liệu cho checkbox , dựa vào thuộc tính checked
    // có bao nhiêu checkboxx có bấy nhiêu biến set checked
    $job_dev ='';
    $job_tester = '';
    $job_ba = '';
    if(isset($_POST['job'])){
        $jobs = $_POST['jobs'];
        foreach ($jobs AS $job){
            switch ($job){
                case 1: $job_dev = 'checked';break;
                case 2: $job_tester = 'checked';break;
                case 3: $job_ba = 'checked';
            }
        }
    }
    ?>
    <input type="checkbox" name="jobs[]" value="1"
    <?php echo $job_dev; ?>> DEV
    <input type="checkbox" name="jobs[]" value="2"
        <?php echo $job_tester; ?>> Tester
    <input type="checkbox" name="jobs[]" value="3"
        <?php echo $job_ba; ?>> BA
    <br>
    <?php
    // đổ lại dữ liệu cho quốc gia : select , sử dụng thuộc tính selected tạo option tương ứng
    $country_vn = '';
    $country_usa ='';
    $country_jp ='';
    // do luôn tồn tại nên k cần dùng isset
    $country = $_POST['country'];
    switch ($country){
        case 1: $country_vn; break;
        case 2: $country_usa; break;
        case 3: $country_jp;
    }

    ?>
    Chọn quốc gia:
    <select name="country">
        <option value="1"
        <?php echo $country_vn; ?>>VN</option>
        <option value="2"
        <?php echo  $country_usa; ?>>USA</option>
        <option value="3"
        <?php echo $country_jp; ?>>Japan</option>
    </select>
    <br>
    Mô tả thêm:
    <?php
    // đổ dữ liệu vào textarea , đổ vào nội dung giữa cặp thẻ đó ,  chú ý ko đc có dấu cách giữa cặp thẻ này
    $description = isset($_POST['description']) ?
        $_POST['description']: '';
    ?>
    <textarea name="description"><?php echo $description; ?></textarea>
    <br>
    <input type="submit" id="" name="submit" value="show info">
</form>
