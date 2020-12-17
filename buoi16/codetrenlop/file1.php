<?php
// nhúng file trong PHP
// thực tế website sẽ chia làm các file có mục đích riêng
// có 2 cơ chế nhúng file: include và require , 4 hàm sau:
// include
// include_once
// require
// require_once
// tạo 1 file file2.php ,  tạo ngang hàng với file hiện tại
// bản chất nhúng file : copy tất cả nội dung file2.php paste vào vị trí đang nhúng tại file1.php
//include_once 'file2.php';
//include_once 'file2.php';
//include_once 'file2.php';
//include_once 'file2.php';
require 'file2.php';
//include 'file2.php';
echo "<br />";
// vẫn hiển thị đc giá trị của number, mặc dù trong file1.php ko hề thấy khai báo , do dã nhúng file2.php
echo $number;

echo "<h1>Nội dung này có được hiển thị ko?</h1>";
//tổng quát:
//include và require chỉ khác nhau về cơ chế hiển thị lỗi và tưhcj khi code phía sau đoạn lỗi khi nhúng file ko tồn tại
// - _once kiểm tra xem đã nhúng file trc đó hay chưa,
// đảm bảo 1 file chỉ đc nhúng 1 lần duy nhất trên trang
// nên dùng hàm require_once để nhúng file