<?php
session_start();
require_once 'database.php';
/**
*form cập nhật ssp
 * form cập nhật giống hệt form thêm mới, chỉ khác ở dữ liệu mặc định đổ ra form -> copy form thêm mới paste sang form cập nhật
 *
 **/
// validate tham số id trên url
if (!isset($_GET['id']) || !is_numeric($_GET['id'])){
    $_SESSION['error'] = 'Id không hợp lệ';
    header('Location: index.php');
    exit();
}
$id = $_GET['id'];
// lấy dữ liệu của bản ghi tương ứng đổ ra form
//Url: update.php?id=1
// Viết truy vấn :
$sql_select_one = "SELECT * FROM products WHERE id = $id";
// Thựcthi truy vấn , với SELECT trả về obj trung gian:
$obj_result_one = mysqli_query($connection,$sql_select_one);
// trả về mảng kết hợp 1 chiều
$product = mysqli_fetch_assoc($obj_result_one);
// xử lí submit form, tương tự hư thêm mới
//debug
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";
// tạo biến chứa lỗi
$error = '';
//Nếu submit form thì mới xử lí
if (isset($_POST['submit'])){
    // tạo biến trung gian
    $name = $_POST['name'];
    $price = $_POST['price'];
    $avatar_arr = $_FILES['avatar'];
    //Validate form: giống hệt thêm mới
    // Xử lí upload file nếu có và cập nhật dữ liệu chỉ khi không có lỗi
    if (empty($error)){
        // Xử lí upload file nếu có
        // Khởi tạo biến chứa tên file đang có của sp
        $avatar = $product['avatar'];
        if ($avatar_arr['error'] == 0){
            // xóa ảnh cũ đi tránh rác hệ thống
            // , kí tự @ hack không báo lỗi nêí xóa 1 file k tồn tại
            unlink('uploads/'. $avatar);
            // bỏ qua bước tạo thư mục upload vì luôn tồn tại
            // r - đã xử lí khi thêm mới
            //Sinh file mang tính duy nhất
            $avatar = time() . '=' . $avatar_arr['name'];
            move_uploaded_file($avatar_arr['tmp_name'], "uploads/$avatar");
        }
        //Tương tác với CSDL để update dữ liệu
        // Viết truy vấn:
        $sql_update = "UPDATE products SET name='$name', price =$price, avatar='$avatar' WHERE id = $id";
        // thực thi
        $is_update = mysqli_query($connection, $sql_update);
        if ($is_update){
            $_SESSION['success'] = 'Update thành công';
            header('Location: index.php');
            exit();
        }else{
            $error = 'Update thất bại';
        }
    }
}
?>
<h3 style="color: red"><?php echo $error;?></h3>
<h1>Form cập nhật sản phẩm</h1>
<form action="" method="post" enctype="multipart/form-data">
    Tên sản phẩm: <input type="text" name="name" value="<?php echo $product['name'];?>">
    <br>
    Giá sản phẩm:
    <input type="number" name="price" value="<?php echo $product['price'];?>">
    <br>
    Ảnh sp:
    <input type="file" name="avatar">
    <img src="uploads/<?php echo $product['avatar'];?>" alt="">
    <br>
    <input type="submit" name="submit" value="Cập nhật">
    <a href="index.php">Back</a>
</form>