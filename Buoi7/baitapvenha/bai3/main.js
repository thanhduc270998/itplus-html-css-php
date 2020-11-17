var obj_form = document.getElementById('form');
obj_form.addEventListener('submit', function(){
    var obj_name = document.getElementById('name');
    var name = obj_name.value;
    var obj_email = document.getElementById('email');
    var email = obj_email.value;
    var obj_telephone = document.getElementById('telephone');
    var telephone = obj_telephone.value;
    var obj_result = document.getElementById('result');
    obj_result.innerHTML = "Họ tên của bạn là :" + name +"<br />" +" Email của bạn là :" + email +  " Contact No của bạn là :" + telephone;
    event.preventDefault();
});