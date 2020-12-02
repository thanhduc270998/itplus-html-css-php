$(document).ready(function(){
    //alert('hello');
    // module jquery effect
    // cung cấp 1 số hàm liên quan đến hiệu ứng
    // + gọi sự kiện click trên class = btn-hide
    $('.btn-hide').click(function(){
        // ẩn selector ngay lập tức
        //$('.h1-test').hide();
        // ẩn thoe khoảng thời gian : ms
        $('.h1-test').hide(2000);
    });
    // gọi sự kiện clic trên class = btn-show
    $('.btn-show').click(function(){
        // show selecttor ngay lập tức
        //$('.h1-test').show();
        // hiển thị theo thời gian
        $('.h1-test').show(2000);

    })
    // gọi sự kiện click trên .btn-auto
    $('.btn-auto').click(function(){
        // ẩn / hiện tự động bằng toggle
        //$('.h1-test').toggle();
        $('.h1-test').toggle(3000);
    })
    // gọi skien click trên .animate
    $('.animate').click(function(){
        // tạo 1 biến kiểu object
        var obj = {
            width: "50%",
            backgroundColor: 'red',
            marginLeft: '40px',
            fontSize: '50px',
            borderWidth: '10px',
            opacity: 0.5,
        };
        $('.h1-test').animate(obj, 5000);
    });
    // module jQuery Ajax 
    // cơ chế không đồng bộ: không cần chờ chức năng trước nó được xử lí xong , mà vẫn có thể chạy trc 
    // Ajax sử dụng php để tạo ra 1 website cho phép tương tác với csdl mà không hề tải lại trang
    // so sánh cơ chế đồng bộ và k đồng bộ với hàng đợi
    // đồng bộ: vào trc xử lí trc
    // ko đồng bộ : vào sau vẫn có thể đc xử lí trc
    // học chi tiết ở phần PHP , sau khi học xong CSDL
    // khai báo cú pháp ajax dùng jQuery
    $.ajax({
        // url xử lí ajax , url này sẽ là file PHP
        url: 'get_list.php',
        // phương thức truyền dữ liệu từ ajax
        method: 'post',
        // dữ liệu gửi lên tên , tuổi
        data: {
            name: 'Đức',
            age: 30
        },
        // nơi nhận kết quả trả về sau khi PHP xử lí xong , chứa trong tham số của phương thức success -> data
        success: function(data){
            console.log(data);
        }
    });


})