<?php
session_start();
require_once 'database.php';
/***
 * Ứng dụng CRUD
 * 4 chức năng nền tảng của bất cứ 1 website nào
 * cấu trúc thư mục : qly sản phẩm
 * crud/
 *      /database.php: cấu hình kết nối CSDL theo mySQLi
 *      /index.php: liệt kê sản phẩm
 *      /create.php: form thêm mới sp
 *      /update.php: form update sp
 *      /detail.php: chi tiết sp
 *      /delete.php: xử lí xóa sp
 *
 *
 */
?>
<?php
//session djang flash
if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
//session djang flash, chứa lỗi nếi
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
// Xử lí lấy dữ liệu từ bảng products
// viết truy vấn : thoe thứ tự giảm dần của ngày tạo
$sql_select_all = "SELECT * FROM products ORDER BY created_at DESC ";
// Thực thi truy vấn
$obj_result_all = mysqli_query($connection, $sql_select_all);
// lấy dữ liệu trả về dưới dạng mảng kết hợp
$products = mysqli_fetch_all($obj_result_all, MYSQLI_ASSOC);
echo "<pre>";
print_r($products);
echo "</pre>";
?>

<a href="create.php">Thêm mới sp</a>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Avatar</th>
        <th>Created_at</th>
        <th></th>
    </tr>
    <tr>
        <?php foreach($products AS $product) : ?>
    </tr>
    <tr>
        <td><?php echo $product['id']; ?></td>
        <td><?php echo $product['name'];?></td>
        <td><?php echo $product['price'];?></td>
        <td>
            <img src="uploads/<?php echo $product['avatar']?>" alt="" height="80px">
        </td>
        <td><?php $created_at = date('d-M-Y H:i:s',
            strtotime($product['created_at']));
        echo $created_at;
        ?>
        </td>
        <td>
            <?php
            $url_detail = "detail.php?id=" . $product['id'];
            $url_update = "update.php?id=" . $product['id'];
            $url_delete = "delete.php?id=" . $product['id'];
            ?>
            <a href="<?php echo $url_detail; ?>">
                Chi Tiết
            </a>
            <a href="<?php echo $url_update; ?>">sửa</a>
            <a href="<?php echo $url_delete; ?>">xóa</a>
        </td>
    </tr>
    <tr>
        <?php endforeach; ?>
    </tr>
</table>