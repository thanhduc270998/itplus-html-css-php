<?php
$arr = [2,5,6,9,2,5,6,12,5];
$number1 =  $arr[0];
$sum ='';
$sub = '';
$multy = '';
$division = '';
foreach ($arr AS $arrs => $value){
    $sum += $value;
    $sub -= $value;
    $multy *= $value;
    $division /= $value;
}
echo 'Phép tính của là' . $sum;
echo 'Phép tính của là' . $sub;
echo 'Phép tính của là' . $multy;
echo 'Phép tính của là' . $division;