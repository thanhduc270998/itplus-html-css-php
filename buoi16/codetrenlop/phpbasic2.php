<?php
//toán tử giống js
// toán tử số học : tính toán biểu thức xung quanh nó
$number1 = 5;
$number2 = 2;
echo $number2 + $number1; // 7
echo $number1 - $number2; // 3
echo $number1 * $number2; // 10
echo $number1 / $number2; // 2.5
echo $number1 % $number2; // 1
$number1++ ;
echo $number1; // 6
 $number2-- ;
echo $number2; //1
//2- toán tử so sánh: kết quả trả về true / false
$number1 = 5;
$number2 = 2;
// so sánh bằng dùng 2 dấu =
var_dump($number1 == $number2); // false
// so sánh khác
var_dump($number1 != $number2); // true
var_dump($number1 > $number2); //true
var_dump($number1 >= $number2); //true
var_dump($number1 < $number2); //false
var_dump($number1 <= 5); //false

// 3 -toán tử logic: kết hợp các biểu thức so sánh , kết quả trả về là true / false
$number1 = 5;
$number2 = 2;
var_dump(($number1 > 0) && ($number2 > 0)); // true
// OR ||
var_dump(($number1 > 0) || ($number2 < 0)); // true
// NOT !
var_dump(!($number1 > 0)); // false
// toán tử gán : =
$number1 = 5;
$number1 +=2; //7
$number1 -=1;//6
$number1 *= 2;//12
$number1 /=2;//3
$number1 %=2; //1
// Câu lệnh điều kiện : if , else ,elseif, switch case
// biểu thức điều kiện trong câu lệnh điều kiện luôn trả về boolean, chỉ chạy logic code khi gặp case đúng- khi biểu thức trả về true
//1: if : dùng khi chỉ có 1 case duy nhất
$number1 = 5;
if($number1 > 0){
    echo "Biến number1 > 0";
}
// 2 -if else: dùng cho 2 case
if ($number1 == 2){
    echo "Number1 = 2";
} else{
    echo "Number1 khác 2";
}
// toán tử điều kiện dùng thay thế cho if....else khi logic code bên trong if...else đơn giản?
echo $number1 == 2 ? 'Number1 = 2': 'Number1 !=2';
// 3 - if elseif else: dùng > 3 case
$number1 = 5;
if($number1 == 1 ){
    echo "number1 = 1";
}elseif ($number1 ==3){
    echo "number 1 = 3";
}
elseif ($number1 ==5){
    echo "number 1 = 5";
} else{
    echo "number1 khác 1,3,5";
}

// 4 - Switch case: thay thế if...elseif , chỉ dùng đc khi biểu thức điều kiện là so sáh bằng
switch ($number1){
    case 1: echo "Number 1 = 1"; break ;
    case 3: echo "Number 1 = 3"; break ;
    case 5: echo "Number 1 = 5"; break ;
    default: echo  "Number 1 khác 1 ,3 ,5";
}
// sd cú pháp viết tắt của câu lệnh điều kiện khi heiẻn thị mã HTML phức tạp
$number1 = 1;
// kiểm tra nếu biến number > 0 thì hiển thị 1 cấu trúc HTML sau:
$number =1;
if($number > 0){
    echo '
<div style="width: 100px ; height: 100px;background: red;">
    <h1>Thẻ h1</h1>
    <p>Thẻ p</p>
    <i>Thẻ i</i>
</div>';
}
// sử dụng thẻ viết tắt của câu lệnh điều kiện để heiẻn thị ra mã HTML, tách biệt code PHP và HTML
?>
<?php if($number > 0) : ?>
<div style="width: 100px ; height: 100px;background: red;">
    <h1>Thẻ h1</h1>
    <p>Thẻ p</p>
    <i>Thẻ i</i>
</div>
<?php endif;  ?>
<?php
$number = 5;
?>
<?php if($number == 1): ?>
<h2 style="color: red">Biến number = 1</h2>
<?php elseif ($number == 3) : ?>
<h2 style="color: green">Biến number = 3</h2>
<?php elseif ($number == 4) :?>
    <h2 style="color: yellow">Biến number = 5</h2>
<?php else : ?>
<p>Number khác 1 , 3, 5</p>
<?php endif; ?>
<?php
// Vòng lặp
// với php rất ít khi dùng for , while , do..while để lặp
//1 - for : vòng lặp xác định trc số lần lặp
for ($i = 1; $i <=10; $i++){
    echo $i;
}
//12345678910
// 2 - while
$j = 1;
while ($j <=10){
    echo $j;
    $j++;
}
// 3 - do...while
$k = 1;
do{
    echo $k;
} while($k < 0);
// BREAK - CONTINUE: can thiệp vào quy trình lặp
// Break: thoát hẳn vòng lặp, không chạy code phía sáu break
for ($i = 1; $i <= 10; $i++){
    if($i < 1 || $i >=8){
        break;
    }
}
echo $i;
//1234567
// continue: bỏ qua lần lặp hiện tại , nhảy tới lần lặp kế tiếp, bỏ qua -> ko chạy code phía sau continue
for($i = 1; $i <=10; $i++){
    if ($i > -1){
        echo $i;
        continue;
    }
    echo $i;
}
//12345678910
for($i = 1; $i <=10; $i++){
    if ($i < 0 || $i == 10){
        continue;
    }
    echo $i;
}
//123456789
?>
