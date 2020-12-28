<?php
session_start();
//require_once 'test1.php';
/**
 *Session trong PHP
 * Bài toán : tạo 1 file test1.php ngang hàng, trong file này khia báo 1 biến $name = <Tên-của-bạn>;
 * - Muốn sd biến $name từ file test1.php?
 * - Nếu có 1000 file cùng muón dùng lại biến $name -> nhúng file 1000 lần
 * - Thay đổi lại cơ chế lưu trữ thông tin -> dùng biến dạng session và cookie để lưu trữ
 * SESSION :
 * dùng để lưu trữ thông tin
 * biến đc lưu bởi session có thể đc truy cập từ bất cứ đâu trên hệ thống
 * Phiên làm việc: có thời điểm bắt đầu và kết thúc session. Session bắt đầu khi tạo , kết thúc bằng 1 trong 2 cách: xóa thủ công / đống trình duyệt
 * các ứng dụng dùng session : login , giỏ hàng
 * PHP tạo ra 1 biến djang mảng $_SESSION, chứa tất cả thông tin về session trên hệ thống
 * - session hoạt động trên server, user ko thể biết đc server PHP dang có các session nào
 * Thao tác với session giống hệt thao tác mảng
 * // luôn phải khởi tạo session thì mới dùng đc biến $_SESSION
*/
//echo $name;
// Thêm session mới:
$_SESSION['address'] = 'HN';
$_SESSION['info'] = [
    'class' => 'php1020e',
    'amount' => 25
];
// hiển thị session
echo $_SESSION['info']['amount']; //25
// xóa session:
unset($_SESSION['info']['amount']);
$_SESSION['fullname'] = 'Trương Thành Đức';
//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";
?>