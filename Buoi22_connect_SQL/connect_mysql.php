<?php
/***
*connect_mysql.php
 * Kết nối CSDL MySQL trong PGP sử dụng thư viện MySQLi
 * -PHP và MySQL hoàn toàn độc lập , cần dùng các thư viện viết sẵn để có thể kết nối -> MySQLi
 * - MySQLi cung cấp các hàm PHP thuần để tương tác ->
 * dẽ học, ngoài ra cũng có cú pháp của OOP -> ko học
 * MySQLi chỉ hỗ trợ tới CSDL duy nhất là MySQL
 * -Sang phần lập trình hướng đối tượng -> PDO
 * MySQLi đã đc cài đjăt hay chưa? XAMPP mặc định hỗ trợ luôn MySQLi
 * MySQLi - improve
 * MySQLi cung cấp các hàm PHP có tiền tố mysqli_
 */
// CÁC BƯỚC KẾT NỐI TỚI MySQL từ PHP sử dụng thư viện MySQLi
// Tạo CSDL : php1020e_mysqli
// CREATE DATABASE IF NOT EXISTS php1020e_mysqli
//CHARACTER SET utf8 COLLATE utf8_general_ci;
// Tạo bảng products: id, name, price, created_at
// CREATE TABLE IF NOT EXISTS products(
//id INT(11) AUTO_INCREMENT,
//name VARCHAR(150),
//price INT(11),
// created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
// PRIMARY KEY (id)
//)

// 1- Khởi tạo kết nối
// Khai báo các hằng chứa thông tin kết nối
// máy chủ chứa CSDL
const DB_HOST = 'localhost'; //127.0.0.1
// Username kết nối vào CSDL
const DB_USERNAME = 'root'; // XAMPP sinh ra sẵn
// Password kết nối vào CSDL
const DB_PASSWORD = ''; // xampp sinh ra sẵn
// Tên csdl kết nối
const DB_NAME = 'php1020e_mysqli';
// Cổng kết nối
const DB_PORT = 3306;
// kết nối
$connection = mysqli_connect(DB_HOST, DB_USERNAME , DB_PASSWORD , DB_NAME , DB_PORT);
if(!$connection){
    die('Lỗi kết nối: '. mysqli_connect_error());
}
echo "<h2>Kết nối thành công </h2>";
// 2 - truy vấn INSERT
// Tạo câu truy vấn
$sql_insert = "INSERT INTO products(name, price) VALUES('Samsung S1', 1000)";
// Thực thi truy vấn vừa tạo , với INSERT/UPDATE/DELETE
//kết quả tra về luôn là true / false
$is_insert = mysqli_query($connection, $sql_insert);
// Cách debug khi thực thi trả về FALSE -> copy câu truy vấn paste lên tab SQL của PHPMyadmin để chạy trực tiếp
var_dump($is_insert);
// 3- UPDATE
// update bản ghi có id=1 với name = NEW, price=1
// Viết câu truy vấn
$sql_update = "UPDATE products SET name = 'New' , price = 1 WHERE id = 1";
// Thực thi truy vấn
$is_update = mysqli_query($connection, $sql_update);
var_dump($is_update);
// 4 - Truy vấn DELETE
// Ví dụ : xóa các bản ghi có id >= 4
// Viết truy vấn , cần kèm điều kiện xóa
$sql_delete = "DELETE FROM products WHERE id>= 4";
// thực thi truy vấn
$is_delete = mysqli_query($connection, $sql_delete);
var_dump($is_delete);
// 5 - truy vấn SELECT
// SELECT nhiều bản ghi tại 1 thời điểm
// VD lấy tất cả bản ghi đang có
// viết truy vấn:
$sql_select_all = "SELECT * FROM products ORDER BY id DESC ";
// Thực thi truy vấn . với SELECT kết quả tra về ko phảilà true/false mà là 1 đối tượng trung gian
$obj_result_all = mysqli_query($connection, $sql_select_all);
echo "<pre>";
print_r($obj_result_all);
echo "</pre>";
// trả về mảng kết hợp từ đối tượng trung gian trên
$products = mysqli_fetch_all($obj_result_all,MYSQLI_ASSOC);
echo "<pre>";
print_r($products);
echo "</pre>";
// SELECT 1 bản ghi duy nhất - >  mảng 1 chiều
// VD: Lấy bản ghi có id = 1
// Viết truy vấn
$sql_select_one = "SELECT * FROM products WHERE id = 1";
// thực thi truy vấn
$obj_result_one = mysqli_query($connection,$sql_select_one);
// Trả về mảng kết hợp 1 chiều:
$product = mysqli_fetch_assoc($obj_result_one);
echo "<pre>";
print_r($product);
echo "</pre>";
?>