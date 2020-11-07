/* giới thiệu 1 số hàm built-in
1. Alert
2. console
3. confirm
4. prompt
5. set timeout
6. set interval */
var fullName = 'Trương Thành Đức';
//console.log(fullName); // show ra kết quả

//confirm('Xác nhận bạn đủ tuổi') // tạo ra hộp thoại xác nhận 

//prompt('Xác nhận bạn đủ tuổi') // tạo ra hộp thoại xác nhận có ô input

/*setTimeout(function() {
    alert('Thông báo')
}, 1000); // thực thi đoạn code nào đó sau 1 khoảng thời gian nhất định
*/

setInterval(function() {
    console.log('Đây là log' + Math.random(), 1000) // giống setTimeout nhưng thực thi liên tục sau 1 khoảng thời gian nhất định
})