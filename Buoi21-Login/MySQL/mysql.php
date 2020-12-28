<?php
/**
*mysql.php
 * Làm việc với Database MySQL
 * Từ trước đến giờ -> website đều là web tĩnh
 * website bắt buộc phải là web động -> có tương tác với csdl
 * Website viết bằng PHP có thể kết nối đc với Nhiều CSDL: MySQL , SQL Server, Oracle ,SQL Lite , Mongo DB...
 * - Thông dụng nhất luôn là CSDL MySQL
 * - Làm sao để cài đặt CSDL MySQL -> XAMPP
 * - Để quản trị CSDL MySQL , có 2 cách:
 * Dùng command line: ko hướng dẫn
 * Dùng giao diện đồ họa : PHPMyadmin, Navicat, WorkBench ....
 * Dùng PHPMyadmin để quản trị CSDL MySQL
 * Để truy cập PHPMyadmin
 * Các thuật ngữ trong CSDL
 * Database: tên CSDL: php1020e_test , chứa các hàng
 * Tables: các bảng lưu trữ thông tin.
 * Bảng users: lưu các thông tin của user
 * Đặt tên bảng ở dạng số nhiều : users, categories, products
 * Trong bảng có 2 thuật ngữ sau:
 * a/ Column/Trường-Cột: mô tả cấu trúc bảng
 * VD: bảng users có các trường: id, fullname, age, address
 * b/ Record/Bản ghi: dữ liệu cụ thể của từng đối tượng trong bảng
 * VD: bản ghi đầu tiên của  bảng users có các thôngg tin sau: id-1 , fullname-ttduc, age-30,address-HN
 * C/ Khóa chính của bảng: là trường phân biệt các bản ghi với nhua , cơ chế sinh khóa chính thường sẽ để giá trị của khóa chính là số, tự động tăng lên 1 mỗi
 * khi có bản ghi mới sinh ra -> AUTO INCREMENT
 * d/ Khóa ngoại của bảng: FOREIGN KEY, là khóa chính của 1 bảng khác -> các bảng có mối quan hệ -> khóa ngoại liên kết các bảng với nhau
 **/