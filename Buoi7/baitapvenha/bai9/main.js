var obj_form = document.getElementById('form');
obj_form.addEventListener('submit',function(){
    var obj_name = document.getElementById('name');
    var name = obj_name.value;
    var obj_password = document.getElementById('password');
    var password = obj_password.value;
    var obj_email = document.getElementById('email');
    var email = obj_email.value;
    var obj_bday = document.getElementById('bday');
    var bday = obj_bday.value;
    var obj_select = document.getElementById('job');
    var obj_job =  obj_select.options[ obj_select.selectedIndex];
    var obj_result = document.getElementById('result');
    obj_result.innerHTML = "Tài khoản của bạn là: " + name + "<br />" +
    "Mật khẩu của bạn là: " + password + "<br />" +
    "Email của bạn là: " + email + "<br />" +
    "Birthday của bạn là: " + bday + "<br />" +
    "Profession của bạn là: " + obj_job;
    event.preventDefault();
})