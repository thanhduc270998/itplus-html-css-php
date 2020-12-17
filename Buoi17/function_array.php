<?php
/**
demo 1 số hàm có sẵn của PHP thao tác với mảng
 */
// tính tổng các value trong mảng:
$arr = [1,2,3];
echo array_sum($arr); // 6
// loại bỏ giá trị trùng lặp trong mảng
$arr = [1,2,3,4,4,5,5];
$arr_new = array_unique($arr);
echo "<pre>";
print_r($arr_new);
echo "</pre>";
// kiểm tra key có tồn tại trong mảng hay k
$info = [
    'name' => 'ttduc',
    'age' => 20
];
$check = array_key_exists('name' , $info); // true
// tổng số phần tử trong mảng:
echo count($info);; //2
// chuyển từ chuỗi thành mảng dựa vào ký tự phân tách
$string = ' Tôi là ttduc';
$arr = explode(' ', $string);
echo "<pre>";
print_r($arr);
echo "</pre>";
// chuyển từ  mảng về chuỗi ngăn cách bởi kí tự phân tách
$string = implode(' ', $arr); // tôi là ttduc
// xóa phần tử mảng
$arr = ['a','b','c'];
unset($arr[2]);
// kiểmtra kiểu dữ liệu có phải là mảng hay k?
$check = is_array($arr); //true
// ktra giá trị có tồn tại trong các giá trị của phần tử mảng hay k
$arr = ['a' , 'b' , 'c'];
$check = in_array('def' , $arr); //false