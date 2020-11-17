//Sự kiện trong javascript
//thể hiện rõ nhất là Javascript có mục đích chính tương tác với HTML
// mọi hành vi trên trang web thì js đều có các sự kiện để bắt cho bạn
// luôn phải có bước lấy đối tượng trước , sau đó mới gắn sự kiện được
// có 2 cách code để xử lí sự kiện đóng vai trò là thuộc tính thẻ 
// với cách này thì không cần lấy đối tượng , chỉ áp dụng khi logic xử lí đơn giản
// tách code js riêng , sử dụng hàm addEventlistener để gắn sự kiện cho đối tượng muốn tương tác

// lấy đối tượng muốn thao tác, lấy theo id cho đơn giản
var obj_p = document.getElementById('p-click');
//gắn sự kiện cho đối tượng vừa lấy đc
// truyền 2 giá trị cho hàm
// + giá trị đầu tiên: tên sự kiện
// + giá trị thứ 2: là 1 hàm callback - chờ sự kiện trc đó xảy ra xong rồi mới chạy code bên trong hàm callback
// hàm callback của js ko có tham số nào cả
function showAlert(){
alert('Alert thẻ p');
}
// lưu ý cách gọi hàm khi truyền hàm đó như 1 hàm call back
//obj_p.addEventListener('click', showAlert );

// cách hay dùng thực tế là khia báo hàm luôn trong hàm callback
obj_p.addEventListener('click' , function(){
    // code bên trong hàm callback
    alert('click!!!!!')
})


// onchange : áp dụng cho select , radio , checkbox
// lấy obj theo id
var obj_select = 
document.getElementById('country');
//gắn sự keiẹn
obj_select.addEventListener('change', function(){
    // lấy giá trị của thuộc tính value của thẻ option vừa đc chọn
    // console.log('Value =' + obj_select.value);
    // sử dụng this để gọi đến đúng obj hiện tại
    // có thể set value của option trùng với text của option đó để xử lí đơn giản
    console.log('Value = ' +this.value);
    // lấy text hiển thị của option
    var text = this.options[this.selectedIndex].text;
    console.log('Text =' +text);
});

//- demo các sự kiện cơ bản trong js
//  Onclick 
// lấy đối tượng
var obj_h1 = document.getElementById('h1-click');
//gắn sự kiện
obj_h1.addEventListener('click', function(){
    alert('click h1');
});


// onchange: áp dụng cho select , radio , checkbox
// radio: lấy obj theo id
var obj_male = document.getElementById('male');
var obj_female = document.getElementById('female');
// gắn sự keiẹn 
obj_male.addEventListener('change', function(){
console.log('Value male =' +this.value);
});
obj_female.addEventListener('change', function(){
    console.log('Value female =' +this.value);
});

// onmouseenter: hover css - onmouseleave: unhover , 2 sự kiện này luôn đi cùng nhau
// onmousover - onmousout tương tự như 2 sự kiện trên , chỉ khác về cơ chế cha con HTML
// lấy obj theo id:
var obj_h1 = document.getElementById('hover-unhover');
obj_h1.addEventListener('mouseenter' , function(){
this.style = "color: red";
});
// gắn sự kiện unhover
obj_h1.addEventListener('mouseleave' , function(){
    this.style = "color: #000";
});




// onload: chạy khi html css ở trang tải xong hết thì mới chay code js
// test trường hợp lỗi : code JS tương tác với HTML TRƯỚC ĐOẠN KHAI BÁO html
// lấy obj theo id
window.onload = function(){
    // lấy obj theo id
    var obj_a = document.getElementById('a-test2');
    //gắn sự keiẹn
    obj_a.addEventListener('click', function(){
        alert( ' show alert');
    });
}

//onsubmit : chỉ áp dụng với thẻ form
// lấy obj của form theo id
var obj_form = document.getElementById('form');
// gắn skien submit cho obj trên
obj_form.addEventListener('submit', function(){
    // lấy obj số user nhập
    
    var obj_number = document.getElementById('number');
    // lấy giá trị từ obj trên
    
    var number = obj_number.value;
    // hiển thị giá trị trên vào thẻ h3 đang chờ sẵn
    // lấy obj của thẻ h3 theo id
    var obj_result = document.getElementById('result');
    //set text dạng html cho obj trên
    obj_result.innerHTML = "số vừa nhập: " + number;
    // do hành vi mặc định của form là sẽ tải lại trang nên các code js của hàm callback sẽ chưa được thực thi
    // để ngăn ngừa hành vi măc định của form, cần dùng cách sau.
    // event là 1 đối tượng có sẵn của js, chỉ có sẵn trong hàm callback sau khi gọi sự kiện

    event.preventDefault();
    //setting trong tab console của trình duyệt để fix lại log khi có lỗi trong trường hợp tải lại trang
})


// onfocus - onblur: ở trong input - đang ở trong input click ra ngoài input , luôn đi cùng nhau
// lấy obj theo id
var obj_username = document.getElementById('username');
//gắn sự kiện fucus
obj_username.addEventListener('focus', function(){
    this.style = "background: red";
});
// gắn sự keiẹn blur
obj_username.addEventListener('blur', function(){
    this.style = "background: white";
});

// onkeydown: xảy ra khi nhấn phím (chưa nhả phím ra)
// lấy obj theo id
var obj_age = document.getElementById('age');
// gắn event
obj_age.addEventListener('keydown' , function(){
    console.log(this.value);
})


// onkeypress


//onkeyup: áp dụng với các unput mà nhập đc text, key -> phím trên bàn phím
// lấy obj the id
var obj_input = document.getElementById('name');
// gắn sự kiện
obj_input.addEventListener('keyup', function(){
console.log(this.value);
});


 