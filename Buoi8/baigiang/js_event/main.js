// 1 - một số hàm cơ bản của JS 
// Hiển thị nội dung ra 1 tài liệu mới
// chỉ dùng cho mục đích demo

//document.write('Test document.write');

// hiển thị text ra tab console của trình duyệt
//console.log('Test console.log');
// hiển thị text dưới dạng 1 popup cảnh báo , sử dụng \n để xuống dongf , newline
// alert('Text 1 \n Text 2');


// hiển thị input dưới dạng 1 popup cảnh báo
/* var name = prompt('Nhập tên của bạn');
console.log(name);
*/

// hiển thị text xác nhận dưới dạng cảnh báo , hay dùng với chức năng xóa

/* var check = confirm('Bạn có muốn xóa hay không ?');
console.log(check);
*/


// lấy đối tượng HTML dựa theo id của nó
// để đơn giản , chỉ dùng cách lấy đối tượng theo id
// luôn phải có bước lấy ra đối tượng trước, rồi sau đó muốn tương tác gì với đối tượng đó cũng đc
// lấy đối tượng của Javascriptthuần và đối tượng lấy theo jQuery là 2 đối tượng hoàn toàn khác nhau
var obj_a = document.getElementById('a-test');
console.log(obj_a);
console.log(typeof obj_a); // object

// lấy giá trị của text từ đối tượng trên
var text = obj_a.innerHTML; // innerText
console.log(text); // thẻ a1
//Set giá trị cho đối tượng trên
obj_a.innerHTML = "<b>Thẻ a bị bôi đậm</b>";
//obj_a.innerHTML = "<b>Thẻ a bị bôi đậm</b>";

//thay đổi giá trị của thuộc tính đối tượng trên
obj_a.href = "google.vn";
obj_a.title = 'new title';
// -chueyẻn hướng sang url khác
//window.location = 'https://www.google.com/';
// - lấy số ký tự của 1 chuỗi
var string = 'string 123';
var length = string.length;
console.log(length); //10
// trả về lần xuất hiện đầu tiên của 1 chuỗi trong 1 chuỗi khác
var email = 'abc@gmail.com';
// vị trí đầu tiên trong 1 chuỗi bằng 0
// indexOf dùng để tìm vị trí của 1 chuỗi nào đó
var index = email.indexOf('@');
console.log(index); // 3
var index2 = email.indexOf('dasfeh');
console.log(index2); // -1 là không tìm thấy
// mở trình soạn thảo mail mặc định để gửi mail
//window.open('mailto:truongthanhduc270998@gmail.com');