<?php
/***
*Liệt kê sp bằng cơ chế ajax - tương tác với CSDL mà ko tải lại trang
 * Ajax - Asynchronous Js And XML - CƠ CHẾ K ĐỒNG BỘ
 * PHP theo có chế đồng bộ -> chức năng code sau phải chờ chức năng trc nó chạy xong thì mới đến lượt
 *  Ngăn xêp - First In First Out
 * Ko đồng bọ : ko cần chờ chức năng trc chạy xong
 * Ajax tạo ra website có tính trải nghiệm ng dùng cao
 * -> xử lý tốn công hơn so với PHP thuần
 * - Để đơn giản nên dùng Jquery khi gọi Ajax
 * Demo chức năng liệt kê sp bằng Ajax
 */
?>
<a href="#" id="click-ajax">
    Click để show danh sách sp
</a>
<!--Nơi hiển thị kết quả trả về từ ajax-->
<div id="result"></div>

<script src="js/jquery-3.4.1.min.js">

</script>
<script type="text/javascript">
$(document).ready(function (){
   // click vào thẻ a sẽ gọi ajax
    $('#click-ajax').click(function (){
        // tạo 1 đối tượng ajax
        var obj_ajax ={
            // Url PHP gửi data từ ajax lên
            url: 'get_product_ajax.php',
            // phương thức truyền dữ liệu : post/get
            method: 'POST',
            // DATA gửi lên PHP, với chức năng leiẹt kê sp thì k cần data truyền -> demo
            data: {
                name: ' Đức',
                age: 123,
                address: 'HN'
            },
            // Hàm chứa kết quả trả về từ PHP thông qua tham số data (đặt tên tùy ý)
            success: function (data){
                console.log(data);
                // Xử lí kết quả trả về từ php tại đây thông qua tham số data
                // hiển thị nội dung vào selector
                $('#result').html(data);
            }
        };
        // cách debug Ajax - inspect HTML - network
        // gọi ajax theo cú pháp của jQuery
        $.ajax(obj_ajax);
    });
});
</script>