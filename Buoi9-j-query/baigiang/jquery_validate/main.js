 // thư viện jQuery Validate
        // Viết dựa trên jQuery
        // Validate dữ liệu theo kiểu realtime - validate ngay tại thời điểm nhập dữ liệu mà chưa cần submit form
        // bản chất của thư viện là dùng sk onkeyup
$(document).ready(function(){
    // validate form sử dụng thư viện jQuery Validate, chỉ áp dụng cho thẻ<form>
    // validate dựa theo thuộc tính name của input
    // hàm validate có 2 thuộc tính chính
    // rules : tập các rele validate
    // messages: message hiển thị lỗi tương ứng với rule đã khai báo
    // làm validate có 1 phương thức sau:
    // errorPlacement: nơi đặt message lỗi
    $('#form').validate({
        rules: {
            username: {
                required: true, //  không được để trống
                minlength: 3, // ít nhất 3 kí tự
            },
            age: {
                required: true, // không được để trống
                number: true, // phải nhập số
                min: 1, // nhỏ phải là 1
                max: 10 // lớn nhất là 10
            },
            email: {
                email: true // phải là email
            }
        },
        messages: {
            username: {
                required: 'Phải nhập tên',
                minlength: 'Nhập ít nhất 3 kí tự'
            },
            age: {
                required: ' Không được để trống',
                number: 'Phải nhập tuổi',
                min: 'Nhỏ nhất là 1',
                max: 'Lớn nhất là 10'
            },
            email: {
                email: 'Email chưa đúng định dạng'
            }
        },
        errorPlacement: function(error, element){
            // error : đối tượng chứa message lỗi
            // element: đối tượng input tương ứng
            error.insertAfter(element);
            error.wrap('<div style="color: red"></div>');
        }
    });
})