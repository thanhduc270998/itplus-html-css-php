<?php

/***

 COOKIE
 - Giống như sessionn , cookie lưu trữ thông tin
 * - Cookie sẽ k mất đi khi đóng trình duyệt, chỉ mất khi xóa trực tiếp bằng atb Inspect HTML hoặc set lại thời gian sống cho cookie
 * - PHP tạo biến $_COOKIE lưu trữ toàn bộ cookie trên trình duyệt
 * Hoạt động trên trình duyệt / client -> biết đc website đó lưu cookie nào trên trình duyệt
 * Chức năng ghi nhớ mật khẩu , quảng cái
 * - Xem cookie tại Inspect HTML -> Application-> cookie
 */
 //   echo file_get_contents("https://vnexpress.net/");

    // Inspect -> Application -> cookie
// Khởi tạo cookie
// khởi tạo cookie, ko giống như thêm phần tử vào mảng
// $_COOKIE['name'] = 'abc';
// tạo cookie có name = fullname, value=ttduc, tồn tại trong 120s tính từ thời điểm tạo ra
setcookie('fullname','ttduc',time() +5);
// lấy giá trị cookie, giống thao tác mảng
echo isset($_COOKIE['fullname']) ? $_COOKIE['fullname'] : '';
// Xóa cookie: ko xóa dùng hmà unset , dùng hàm setcookie -> thời gian sống là số âm
setcookie('fullname', '' , time() -1);

// Session - Cookie: Giống nhau đều dùng để lưu trữ dữ liẹue
// Session - Cookie: Khác nhau
// + Session lưu trên server, cookie lưu trên trình duyệt/client
// Session mất đi khi đóng trình duyệt, còn cookie thì ko

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";