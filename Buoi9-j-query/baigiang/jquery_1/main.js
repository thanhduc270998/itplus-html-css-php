// 1 cài đặt
// + Nhúng link online : CDN
// + Tải về
$(document).ready(function(){
    //alert('Jquery');
})
// 2 - Cấu trúc DOM
// 3 - Các module chính của jQuery
//  + Học jQuery sẽ học các hàm có sẵn
// + jQuery đăkc trưng bởi kí tự $
// + Module jQuery Selector: là module quan trọng nhát , lấy ra đối tượng DOM/HTML muốn thao tác 
// cú pháp lất selector hoàn toàn giống CSS
// dùng js thuần để lấy đối tượng
var obj_p1 = document.getElementById('p1');
console.log(obj_p1);
// dùng jQuery để lấy đối tượng
var obj_p2 = $('#p1');
console.log(obj_p2);
// 2 đối tượng trên là hoàn toàn khác nhau , nên sẽ k thể dùng chung các hàm đc

// jQuery Selector
// các cách lấy selector:
// selector theo tên thẻ
//selector theo id, class
// selector theo thuộc tính thẻ
// $('input[type=text]');
// chờ HTML CSS tải xong thì mới chạy JS
// tương đương với sk onload của Javascript
(function(){

});
$(document).ready(function(){
// jquery selector
// hàm find , tìm selector con của phần tử cha
var selector = $('#parent').find('p');
console.log(selector);
// hàm parent : lấy ra selector là cha trực tiếp
selector = $('#parent').parent();
console.log(selector);
// hàm parents: lấy tất cả cha
selector = $('#parent').parents();
console.log(selector); // body html
// Hàm children: lấy con trực tiếp
selector = $('#parent').children();
console.log(selector); // 3 thẻ p , 1 thẻ div
$('#h5-test').next(); //<h5>Thẻ h5 thứ 3</h5>
$('#h5-test').prev(); //<h5>Thẻ h5 thứ 1</h5>
// hàm nextAll: giống next, lấy tất cả
$('#h5-test').nextAll();
$('#h5-test').preAll();

// - jQuery Attribute
// Thao tác với thuộc tính của thẻ
// lấy gái trị thuộc tính: attr

var type = $('input[value=ABC]').attr('type');
console.log(type); //text
// set giấ trị : attr
$('input[value=ABC]').attr('placeholder', 'New placeholder');
// xóa thuộc tính: removeAttr
$('input[value=ABC]').removeAttr('placeholder', 'New placeholder');
//set CSS
$('input[value=ABC]').css('background', 'red');
// get set nội dung cho selector: html , text
var html = $('#b1').html();
console.log(html); //thẻ b1
//set
$('#b1').html('new b1');
// get set giá trị của input: val
var val = $('input[value=ABC]').val();
//ABC 
// -jquery DOM
// thao tác với cây Dom /HTML
// xóa selector
$('#b1').remove();
// jquery event 
// cung cấp các hàm xử lí sự kiện , tên hàm chính là tên sự kiện của javascript
$('.a1').click(function(){
    alert('click');
})
// jquery effect và jquery.ajax
})
