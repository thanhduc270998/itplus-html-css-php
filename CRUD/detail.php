<?php
require_once 'database.php';
/**
 *chi tiết
*/
// lấy giá trị của id từ url , giống hệt update
// validate id
$id = $_GET['id'];
// lấy bản ghi theo id , giống hệt update
$id = $_GET['id'];
// lấy dữ liệu của bản ghi tương ứng đổ ra form
//Url: update.php?id=1
// Viết truy vấn :
$sql_select_one = "SELECT * FROM products WHERE id = $id";
// Thựcthi truy vấn , với SELECT trả về obj trung gian:
$obj_result_one = mysqli_query($connection,$sql_select_one);
// trả về mảng kết hợp 1 chiều
$product = mysqli_fetch_assoc($obj_result_one);
?>
ID : <?php echo $product['id'];?>
<br>
Name: <?php echo $product['name'];?>
<a href="index.php">Back</a>

