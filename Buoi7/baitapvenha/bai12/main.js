var obj_form = document.getElementById('form');
obj_form.addEventListener('submit' , function(event){
    var error = '';
    var result = '';
    var obj_uname = document.getElementById('uname');
    var uname = obj_uname.value;
    var obj_password = document.getElementById('password');
    var password = obj_password.value;
    var obj_repassword = document.getElementById('repassword');
    var repassword = obj_repassword.value;
    var obj_fname = document.getElementById('fname');
    var fname = obj_fname.value;
    var obj_lname = document.getElementById('lname');
    var lname = obj_lname.value;
    var obj_email = document.getElementById('email');
    var email = obj_email.value;
    var obj_phone = document.getElementById('phone');
    var phone = obj_phone.value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(!filter.test(email)){
        error = "Bạn phải nhập chính xác định dạng email";
        obj_email.focus();
    }   else if(isNaN(phone)){
        error = "Bạn phải nhập số";
        obj_phone.focus();
    }   else if( !isNaN(fname) || !isNaN(lname)){
        error = "Bạn không được nhập số";
        obj_fname.focus();
        obj_lname.focus();
    }   else if( password !== repassword){
        error = "Mật khẩu không trùng nhau";
        obj_password.focus();
        obj_repassword.focus();
    }
    if (!error){
        result = "Tên đăng nhập của bạn là: " + name + "<br/>" + "Mật khẩu của bạn là: " + password + "<br/>" + "Họ của bạn là: " + fname + "<br/>" + " Tên của bạn là: " + lname + "<br/>" + "Email của bạn là: " + email + "<br/>" + "Số điện thoại của bạn là: " + phone;
    }
    document.getElementById('result').innerHTML = result;
    document.getElementById('error').innerHTML = error;
    event.preventDefault();
})