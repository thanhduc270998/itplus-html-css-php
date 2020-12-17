<?php
// kiểu dữ liệu mảng trong PHP
/**
Thao tác với mảng nhiều nhất trong PHP
 * 1 - Định nghĩa
 * khai báo tên 500 ae, tạo 500 biến
 * khai báo thông tin của 1 người : họ tên , tuổi , địa chỉ
 * mảng là kiểu dữ liệu PHP có thể lưu nhiều giá trị tại 1 thời điểm

 */
//2 - cú pháp khai báo mảng , có 2 cách
 //+ dùng từ khóa array
$info = array('Đức',23, 'Hà Nội', true);
// mảng 4 phần tử:
// Phần tử đầu tiên : gia trị = Đức
// Phần tử 2: gia trị = 23
// Phần tử 3 : gia trị = Hà Nội
// Phần tử 4: gia trị = true
// thông dụng với các phiên bản PHP từ 5.4 đổ về trc
// Dùng []
$info = ['Đức',23, 'Hà Nội', true];
// thuật ngữ của mảng: element(phần tử mảng), key , value
$info = ['Đức',23 , 'HN'];
// PHẦN TỬ MẢNg
// key phần tử mảng: giá trị để xác định phần tử mảng đó
// value của phần tử mảng : giá trị của phần tử mảng theo key tương ứng
$info = ['Đức',23 , 'HN'];
// cách debug kiểu dữ liệu mảng để xem thông tin key - value
echo "<pre>";
print_r($info);
echo "</pre>";
// thao tác với mảng:
// thêm phần tử vào cuối mảng
$arr = [];
// thêm phần tử với key tự động tăng
$arr[] = 123;
// thêm phần tử có chỉ định cụ thể key
$arr[9] = 'abc';
echo "<pre>";
print_r($arr);
echo "</pre>";
// lấy giá trị phần tử mảng : có 2 cách, luôn phải biết đc key của phần tử mảng thì mới lấy đc hgiá trị nó
// lấy thủ công
$info = [1,2,3,4,5,6];
echo "<pre>";
print_r($info);
echo "</pre>";
echo $info[5]; //6
echo $info[6]; //báo lỗi do phần tử có key = 6 ko tồn tại

// xóa phần tử mảng: cần phải viết key
$info = [1,2,3,4,5,6];
unset($info[0]);
// sửa giá trị của phần tử mảng
$info = [1,2,3,4,5,6];
$info[2] = 'abc';
echo "<pre>";
print_r($info);
echo "</pre>";
// dùng foeach để lấy tất cả
// 4 - vòng lặp foreach
// có 1 mảng gồm 500 phần tử , lấy giá trị của tất cả 500 phần tử đó
echo  $arr[0];
//echo $arr[1]; // báo lỗi
//
$arr = [1 , 'abc' , 2 , 'def' , true , false , NULL];
// sử dụng for để lặp mảng
echo "<br />";
$count = count($arr); //7
for($i = 0; $i < 7 ; $i++){
    // câu lệnh echo hiển thị kiểu dữ liệu string nên khi hiển thị giá trị true/false bằng echo, thì
    // sẽ ép kiểu như sau: true -> '1' , false -> ''
    var_dump($arr[$i]); //
}
// sử dụng for , while , do..while chỉ áp dụng cho các mảng đơn giản ,thực tế sẽ ít dùng
// sử dụng foreach: có 2 cú pháp khai báo
// foreach : lặp qua từng phần tử mảng, biết đc luônkey và value tương ứng của từng phần tử mảng , thể hiện
$arr = [1 , 'a' , 'b' , 'c' , 'd'];
// dạng khuyết key
foreach ($arr AS $value){
    echo $value;
}
// dạng đầy đủ cả key và value
foreach ($arr AS $key => $value){
    echo " Phần tử mảng , key = $key , value = $value";
} // thay đổi tên biến $key ,$value thoải mái
$arr = ['a', 'b', 'c'];
foreach ($arr AS $k => $v){
    echo "<br />Key: $k, Value: $v";
}
// 5 - cú pháp viết tắt của foreach khi viết lồng với HTML
// hiển thị giá trị của phần tử mảng vào khối HTML sau
$arr = [1,2,3,4,5,6];
foreach ($arr AS $key => $value){
    echo "<div style='background: red ; width: 200px; height: 200px'>";
    echo "<p>$value</p>";
    echo "<i>$value</i>";
    echo "<b>$value</b>";
    echo "</div>";
}
$arr = [1,2,3,4,5,6];
?>
<?php foreach ($arr AS $k => $v): ?>
<div style="background: red ; width: 200px; height: 200px">
    <p>1</p>
    <b>1</b>
    <i>1</i>
</div>
<?php endforeach;?>
<?php
// 6 phân loại mảng
// mảng tuần tự: tất car key của từng phần tử đều là số nguyên , key của phần tử đầu tiên = 0
$arr1 = ['a','b' , 'c'];
$arr2 = [
    3=> 'abc',
    5=> 123,
    9=> 'def',
    'ghi'
];
echo "<pre>";
print_r($arr2);
echo "</pre>";
echo $arr2[9]; //def
foreach ($arr2 AS $key => $value){
    echo "<br /> Key: $key, Value: $value";
}
// Mảng kết hợp: key có cả dạng string
$info = [
    'name' => 'ttduc',
    'age' => 23,
    'address' => 'HN',
    'is_true' => true,
        5 => 'abc'

];
echo $info['address']; // HN
foreach ($info AS $key => $value){
    echo "<br / >Key: $key , Value: $value";
}
// Mảng đa chiều : mảng trong mảng, key có thể ở dạng cả chuỗi và số
$students = [
    'name' => 'SV A',
    'age' => 25,
    'class' => [
        'teacher' => 'Teacher A',
        'amount' => 50,
        'info' => [1,2,3,4,5,6]
    ]
];
echo $students['class']['amount']; //50
foreach ($students AS $key => $student) {
//    echo "<br />Key: $key, Value: $students";
}
// mảng càng nhiều chiều thì càng phức tạp , nên dừng ở tối đa 3 chiều nếu là mảng do bạn tạo ra
?>
