/**
 * Giới thiệu về toán tử trong JavaScript
 * 1. Toán tử số học - Arithmetic
 * 2. Toán tử gán - Assignment
 * 3. Toán tử so sánh - Comparison
 * 4. Toán tử logic - Logical
 * 
 */
// var a = 1 *4;
// var b = 3*7;
// if (a > 0 && b >0){
//     alert('a và b lớn hơn 0')
// }   
/* Toán tử số học
+ cộng
- trừ
* nhân 
/ chia
** lũy thừa
% chia lấy số dư
++ tăng 1 giá trị số
-- giảm 1 giá trị số
*/


//Toán tử ++ --
//Prefix & Postfix
var a = 6;
 
// việc 1: + 1 cho a , a= a+1 = > a = 7
// việc 2: trả về a sau khi được +1
/*var output = a++;
console.log('output: ', output);*/
var number = 6;
var output = number++ * 2 - --number *2;
// 7*2 - 6*2
console.log('output:',output);