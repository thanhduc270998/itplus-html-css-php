<?php
session_start();
/**
*xóa sp theo id
 */
// lấy dữ id từ url , validate id , giống hệt update / detail
$id = $_GET['id'];
// tương tác CSDL để xóa bản ghi theo id
// viết truy vấn
$sql_delete = "DELETE FROM products WHERE id = $id";
// thực thi truy vấnn
$is_delete = mysqli_query($connection, $sql_delete);
var_dump($is_delete);
if ($is_delete){
    $_SESSION['success'] = ' Xóa thành công';
}else{
    $_SESSION['error'] = 'Xóa thất bại';

}
header('Location: index.php');
exit();