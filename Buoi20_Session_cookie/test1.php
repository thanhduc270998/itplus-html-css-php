<?php
session_start();
// $name = 'ttduc';
//DEMO truy cập session có key = fullname từ file session.php\
// luôn phải check session sinh ra từ đâu và dùng hàm isset , để fix dùng trình duyệt ẩn truy cập thẳng vào file hiện tại
//echo $_SESSION['fullname'];
echo isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '';