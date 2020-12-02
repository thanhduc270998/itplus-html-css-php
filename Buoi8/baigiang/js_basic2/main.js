//1- Toán tử
// - Toán tử số học
// + Toán tử cộng
var number1 = 5;
var number2 = 2;
var sum = number1 + number2;
console.log("sum"+ sum); // sum = 7
// + toán tử trừ: -
var sub = number1 - number2; // 3
// + Toán tử nhân: *
var multiple = number1 * number2; //10
// +Toán tử chia: /
var divide = number1 / number2; //2.5
// + Toán tử chia lấy dư: %
var remain = number1 % number2; //1
// + Tăng 1 đơn vị : ++
number1++;
console.log(number1); //6
// + giảm 1 đơn vị: --
number2--;
console.log(number2); //1
--number1;
++number2;
var a = 5;
var sum = a++ - ++a;
// sum = 5 - 7 = -2
var x = 5;
var sum = x++ * ++x * --x % 2;
// = 5 * 7 * 6 %2 = 0
var x = 5;
var sum = x * x - --x *2 + x++ - x * ++x;
// = 5 * 5 - 4 *2 + 4 -5 = -9

// 2 - toán tử so sánh
// Luôn trả về boolean
// + so sánh bằng :==
var number1 = 5;
var number2 = 2;
// so sánh bằng: = 
var operator1 = number1 == number2; // false
// + So sánh khác: !=
var operator2 = number1 != number2; //true
// so sánh lớn hơn: >
var operator3 = number1 > 0; //true
//+ lớn hơn hoặc bằng: >=
var operator4 = number1 >= 5; //true
// nhỏ hơn : <
var operator5 = number1 < 6; //true
// nhỏ hơn hoặc bằng: =<
var operator6 = number1 <= 0; //false
//3 - TOÁN TỬ LOGIC
//kết hợp nhiều biểu thức sử dụng toán tử sánh lại với nhau, vì thực tế có nhiều trường hợp  phải kết hợp nhiều điều kiện thì mới đưa ra đc quyết định
var number1 = 5;
var number2 = 2;
// + AND: &&-> DÙNG &&
var op1 = (number1 > 0) && (number2 <= 2); //true
// OR ||-> dùng ||
var op2 = (number1 < number2) || (number2 < 0); // false
// NOT ! -> DÙNG !
var op3 = !(number1 < 0); //true
// 4 - toán tử gán
var a = 5 ; // gán giá trị 5 cho biến a
// gắn kiểu cộng dồn: +=
a +=2 ; // a = a + 2 //7
a -=3; // 4
a *= 2 ; // 8
a /= 4; //2
a %= 3; //



// II - CÂU LỆNH ĐIÈU KIỆN
//Đưa ra các hành động tương ứng với giá trị trả vềcủa biểu thức điều kiện , biểu thức so sánh
// If, else, elseif , switch case
// + If : xử lí 1 trường hợp duy nhất
var number = 5;
if(number > 0){
    //logic code khi biểu thức là true
    console.log('Number > 0');
}
// If else: dùng cho 2 trườnghợp
var number = -2;
if(number == 0){
    console.log('Biến number đang = 0');
} else{
    console.log('Biến number khác 0');
}
// if elseif else: dùng cho 3 trường hợp trở lên
var point = 6.0;
if (point >= 8 && point <=10){
    console.log('Giỏi');
}else if(point >= 6.5){
    console.log('Khá');
} else if (point >= 5){
    console.log('TB');
} else{
    console.log('Yếu');
} // TB
// toán tử điều kiện: dùng thay thế cho câu lệnh
// if else và logic đơn giản ? :
var number = 5;
if( number >0 ){
    console.log('Biến number > 0');
}
    else{
        console.log('Biến number <= 0')
    }
 var text = number > 0 ? 'Biến number > 0' : 'Biến number <=0';
 console.log(text);

 // Biểu thức switch case
 // dùng để thay thế  khi sd nhiều lệnh if elseif 
 // ->dễ nhìn hơn if elseif
 // chỉ dùng khi biểu thức so sánh là so sánh bằng
 var day = 4;
 // Dùng if elseif
 if (day==1){
     console.log('chủ nhật');
 } else if(day == 3){
     console.log('Thứ 3');
 }else{
     console.log('Không phải chủ nhật , thứ 3');

 }
 // sử dụng switch case
 switch(day){
     case 1 :
         console('Chủ nhật');
        break;
     case 3 :
         console.log('Thứ 3');
         break;
     default:
        console.log('Không phải chủ nhật , thứ 3');
 }


 // vòng lặp 
 // lặp lại logic code nhiều lần
 // luôn phải xác định điểm dừng của vòng lặp, nếu không sẽ bị vòng lặp vô hạn
 // + for : vòng lặp xác định trcc số lần lặp
 for( var i = 1 ; i <= 10; i++ ){
     console.log(i);
 }
 //12345678910
 // + while: vòng lặp không xác định trước số lần lặp
 var j = 1;
 while( j<=10){
     console.log(j);
     j++;
 } //12345678910
 // + Do while : giống while , tuy nhiên luôn chạy code ít nhất lần cho dù điều kiện bị sau ngay từ đầu,
 var k = 1;
 do{
     console.log('Code này có chạy không');
 } while(k<0);
 // từ khóa break - continue trong vòng lặp
 // break: thoát hẳn vòng lặp
 for (var i = 1; i <= 10; i++){
     if(i == 4){
         break;
     }
     console.log(i);
 }
 //123
 for (var i = 1; i <= 10; i++){
    console.log(i);
    if(i == 4){
        break;
    }
}
//1234
// continue: bỏ qua lần lặp hiện tại - không kịp chạy code phía sau continue, nhảy tới lần lặp kế tiếp
for (var j = 1; j <= 10; j++){
    if(j >=5){
        continue;
    }
    console.log(j);
}
//1234
for (var j = 1; j <= 10; j++){
    console.log(j);
    if(j >=5){
        continue;
    }
}
//12345678910
for (var j = 1; j <= 10; j++){
    if(j == 4 || j>=3){
        continue;
    }
    console.log(j);
}
//12

// lấy đối tượng form
var obj_form = document.getElementById('form');
// gắn sự kiện submit cho đối tượng
obj_form.addEventListener('submit', function(){
   // tạo biến chứa lỗi và kết quả
   var error = '';
   var result = '';
   // lấy đối tượng và giá trị của từng input nhập số
   // lấy obj 1
   var obj_number1 = document.getElementById('number1');
   var number1 = obj_number1.value;
   // lấy obj 2
   var obj_number2 = document.getElementById('number2');
   var number2 = obj_number2.value;
   // validat                                                                         e form: xử lí dữ liệu từ form, nếu có lỗi sẽ đổ message lỗi cho biến error
   // không đc để trống
   // phải nhập số : isNaN: is not a number
   if (number1 == ''){
       error= 'Phải nhập số thứ nhất';
       obj_number1.focus();
   }else if (number2 == ''){
       error = 'Phải nhập số thứ 2';
       obj_number2.focus();
   } else if(isNaN(number1) == true || isNaN(number2) == true){
       error = 'Phải nhập số';
   }
   // xử lí cộng 2 số chỉ khi nào k có lỗi xảy ra
   if (error == ''){
       // do giá trị lấy từ input form luôn là kiểu string , nên phép cộng sẽ thành phép nối chuỗi, cần ép kiểu về number thì mới cộng được 2 số ->parseInt
       number1 = parseInt(number1);
       number2 = parseInt(number2);
       var sum = number1 + number2;
       result = "Tổng 2 số là:" + sum;
   }
   // hiển thị error và result ra giao diện
   document.getElementById('error').innerHTML = error; // bị sai 2 cái này
   document.getElementById('result').innerHTML = result;
   // ngăn ngừa hành vi tải lại trang khi submit form để giữ lại hiển thị bằng js
   event.preventDefault();
})