<?php
/***
*Thao tác với CSDL MySQL sử dụng câu truy vấn SQL - Structured Query Language , hoàn toàn độc lập với PHP - PHPMyadmin thao tác với CSDL sử dụng giao diện đồ họa -> là code thì cần
 * phải biết cả SQL
 * SQL ko phân biệt hoa thường : SELECT -> select
 * ->Select, nên viết hoa từ khóa
 * Dùng PHPMyadmin để viết SQL thông qua tab SQL
#COMMENT trong SQL
#COMMENT trong SQL
# 1 - Tạo CSDL , sau khi tạo cần F5 trang để thấy CSDL
CREATE DATABASE IF NOT EXISTS php1020e_sql
CHARACTER SET  utf8 COLLATE
utf8_general_ci;
# 2 - sau khi tạo CSDL, cần truy cập vào CSDL đó thì mới thao tác các hành động khác đc
# 3 Truy cập CSDL trong command line, ko có tác dụng với giao diện đồ họa
USE php1020e_sql;
# 4 -Xóa csdl
# DROP DATABASE abc;
#5 - các kiểu dữ liệu trong MySQL, có 3 kiểu chính : số
# kiểu chuỗi , thời gian
#kiểu số: lưu giá trị số, hay dùng nhát là TINYINT và INT
#TINYINT: lưu các số , hhay dùng nhất là TINYINT và INT
#TINYINT: lưu các số từ -128->127
#INT: lưu các số ~2 tỉ-> 2 tỉ, tốn 4 Byte
#FLOAT/DOUBLE : lưu số thực
#- kiểu chuỗi: lưu giá trị chuỗi , hay dùng nhất là VARCHAR hay TEXT
#VARCHAR: lưu chuỗi có giới hạn kí tự , mặc định tối đa 255 ký tự với các phiên bản MySQL cũ
#TEXT: lưu chuỗi ko giưới hạn kí tự (!~ 65000 Ký tự)
# Kiểu thời gian : lưu thời gian dưới dạng ngày tháng giờ phút giây
#DATETIME: lưu date và time thủ công
#TIMESTAMP: sinh Date và Time tự động
#Chú ý về format Date và Time trc khi lưu vào CSDL, bắt buộc
#YYYY-MM-DD H:i:s
#VD: 30/12/2020 19:37:12 -> sai
#2020-12-30 19:37:12 -> Đúng
# 6 -Tạo Bảng:
# categories:
#id : int(11)
#name: VARCHAR(100)
#created_at: ngày tạo bản ghi , sinh tự động TIMESTAMP
# products:
#id: khóa chính , int(11), tự động tăng lên 1
#name: VARCHAR(150)
#price: INT(11)
#status: 0 -ẩn , 1-hiển thị ->TINYINT
#category_id: khóa ngoại của bảng, liên kết với bảng, quy tắc viết tên khóa ngoại: <tên-bảng-số-ít>_id
#categories, INT(11)
#created_at: ngày tạo bản ghi, sinh tjw động TIMESTAMP
#tạo bảng categories:
CREATE TABLE IF NOT EXISTS categories(
id INT(11) AUTO_INCREMENT,
name VARCHAR(100),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
#set khóa chính , khóa ngoại nêí có
PRIMARY KEY (id)
);
#tạo bảng products
CREATE TABLE IF NOT EXISTS products(
id INT(11) AUTO_INCREMENT,
name VARCHAR(200),
price INT(11),
status TINYINT(1),
create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
category_id INT(11),
#khai báo khóa chính , khóa ngoại nếu có
PRIMARY KEY (id),
FOREIGN KEY (category_id) REFERENCES categories(id)
);
#7 Xóa bảng
#DROP TABLE abc
#8 Insert dữ liệu vào bảng
# chỉ thêm dữ liệu ddói với các trường ko phải sinh tự động
#giá trị thêm phải thể hiện tương ứng với kiểu dữ liệu của trường đó , nếu là số -> giá trị là số, nếu là chuỗi dùng nháy đơn hoặc kéo
# nếu là ngày tháng -> giống như chuỗi
INSERT INTO categories(name)
VALUES('thể thao'),('Thế giới'),('Sức khỏe');
#lấy tất cả các dữ liệu
# lấy tất cả bản ghi và tất cả các trường của bảng categories
SELECT * FROM categories;
# lấy cụ thể từng trường của bảng
SELECT id , name FROM categories;
# lấy giới hạn bản ghi tính từ tản ghi cụ thể:
# LIMIT begin, limit
SELECT * FROM categories LIMIT 4;
#lấy giới hạn bản ghi tính từ bản ghi cụ thể
#LIMIT begin , limit
SELECT * FROM categories LIMIT 3,10; #bản ghi đầu tiên = 0
# lấy theo nhiều điều kiện WHERE
SELECT * FROM categories WHERE id< 10;
# lấy theo nhiều diều kiện : WHERE
SELECT * FROM categories WHERE id<10
# lấy theo nhiều đièu kiện : AND && , OR ||
SELECT * FROM categories WHERE id >= 1 AND id <=5;
#10 Cập nhật bản ghi: UPDATE
#- Luôn cần chỉ định điều kiện khi UPDATE/DELETE , nếu không thì đnag thao tác với toàn bộ bản ghi đang có!
#vd: update name=abc với các bản ghi có id < 5
UPDATE categories SET name='abc' WHERE id < 5;
#11 xóa bản ghi có id > 10
DELETE FROM categories WHERE id> 10;
#4 truy vấn bản của 1 hệ thống web bất kì : INSERT , SELECT,
#UPDATE, DELETE -> thêm - liệt kê - sửa - xóa
#12 Từ khóa like , dùng với select kết hợp Where
# tìm kiếm đúng bằng : =
SELECT * FROM categories WHERE id = 5;
#tìm kiếm tương đối: chứa chuỗi tìm kiếm là đc -> dùng LIKE
#VD: tìm các bản ghi có name chứa chuõi th: abcth , athe, th1122322....
SELECT * FROM categories WHERE name LIKE '%th%';
SELECT * FROM categories WHERE name LIKE 'abc%';
SELECT * FROM categories WHERE name LIKE '123%abc';
#LIKE ko nên dùng cho các website có số bản ghi lớn
#13 Sắp xếp : ORDER BY THEO HƯỚNG DESC -descending giảm dần, ASC - ascending tăng dần
#vd: lấy bản ghi theo chiều giảm dần của id
SELECT * FROM categories ORDER BY id DESC;
SELECT * FROM categories ORDER BY created_at DESC;
#14 Từ khóa IN: tahy thế cho nhiều điều kiện #vd: OR
#vd: lấy bản ghi có id = 1 hoặc id = 2 hoặc id = 4
SELECT * FROM categories WHERE id = 1 OR id = 2 OR id = 4;
#15 BETWEEN: thay thế cho >= AND <=
#vd: lấy bản ghi có id >= 1 và id <= 5
SELECT * FROM categories WHERE id >= 1 AND id <= 5;
SELECT * FROM categories WHERE id BETWEEN 1 AND 5;
#16 Hàm COUNT: đếm số bản ghi trả về từ SELECT
#vd: đếm tổng số bản ghi
SELECT COUNT(id) FROM categories;
 *
 *
 */