// lấy obj của form theo id
 var obj_form = document.getElementById('form');
 // gắn sự kiện submit cho obj trên
 var obj_bottom = document.getElementById('bottom')
 obj_bottom.addEventListener('click', function(){
     // lấy obj name nhập
    var obj_name = document.getElementById('uname');
    // lấy obj email nhập
    var obj_email = document.getElementById('email');
    // lấy giá trị từ obj_name
    var name = obj_name.value;
    // lấy giá trị từ obj_email
    var email = obj_email.value;
    var pupop = "Họ tên của bạn là: " + name + "Email của bạn là: " + email;
    alert(pupop);
    }) 