
function getNumber(id){
// lấy đối tượng theo id
var obj_number = document.getElementById(id);
var number = obj_number.value;
return number;
}

// validate 2 số
// trả về message lỗi nếu có
function validate(number_a, number_b){
    var error = '';
    if (number_a == '' || number_b == ''){
        error = 'Không được để trống';
    } else if (isNaN(number_a) || isNaN(number_b)){
        error = 'Phải nhập số';
    }
    return error;
}
// operator : toán tử sẽ thực hiện phép tính với 2 số 
function calculator(number_a, number_b,operator){
    // lấy giá trị của số a và số b từ input của form
    // lấy đối tượng của input number a
    // hàm này return về 1 giá trị có kiểu dữ liệu number
    var result = 0;
    switch(operator){
        case '+': 
            // ép kiểu phép coọng
            number_a = parseInt(number_a);
            number_b = parseInt(number_b);
            result = number_a + number_b;
            break;
        case '-':
            result = number_a - number_b;
            break;
        case '*':
            result = number_a * number_b;
            break;
    }
    return result;
}
// xử lí chức năng a + b
// lấy đốit ượgn
var obj_add = document.getElementById('add');
// gắn sự kiện
obj_add.addEventListener('click' , function(){
   event.preventDefault();
   // khởi tạo biến chứa lỗi và kết quả
   var error = '';
   var result = '';

   // gọi hàm lấy 2 giá trị của 2 số a và b
   var number_a = getNumber('number-a');
   var number_b = getNumber('number-b');
   // alert(number_a + number_b);
  // gọi hàm validate form
    error = validate(number_a, number_b);
    // gọi hàm tính toán chỉ khi không có lỗi xảy ra
    if(error == ''){
        var sum = calculator(number_a, number_b, '+');
        var result = 'Tổng bằng' + sum;
    }
    // hiển thị kết quả ra màn hình
    document.getElementById('error').innerHTML = error;
    document.getElementById('result').innerHTML = result;
});
var obj_sub = document.getElementById('sub');
// gắn sự kiện
obj_sub.addEventListener('click' , function(){
   event.preventDefault();
   // khởi tạo biến chứa lỗi và kết quả
   var error = '';
   var result = '';

   // gọi hàm lấy 2 giá trị của 2 số a và b
   var number_a = getNumber('number-a');
   var number_b = getNumber('number-b');
   // alert(number_a + number_b);
  // gọi hàm validate form
    error = validate(number_a, number_b);
    // gọi hàm tính toán chỉ khi không có lỗi xảy ra
    if(error == ''){
        var sub = calculator(number_a, number_b, '-');
        var result = 'Hiệu bằng' + sub;
    }
    // hiển thị kết quả ra màn hình
    document.getElementById('error').innerHTML = error;
    document.getElementById('result').innerHTML = result;
});
// phép nhân
var obj_multiple =document.getElementById('multiple');
obj_multiple.addEventListener('click' , function(event){
    var number_a = getNumber('number-a');
    var number_b = getNumber('number-b');
    error = validate(number_a, number_b);
    if(error == ''){
        var multiple = calculator(number_a, number_b , '*');
        var result = "Nhân bằng" + multiple;
    }
    document.getElementById('error').innerHTML = error;
    document.getElementById('result').innerHTML = result;
    event.preventDefault();
})