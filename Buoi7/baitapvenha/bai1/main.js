// sử dụng phương thức onsubmit
// lấy obj của form theo id
var obj_form = document.getElementById('form');
// gắn sử kiện submit cho obj trên
obj_form.addEventListener('submit', function(){
    // lấy obj họ tên và tuổi
    var obj_name = document.getElementById('uname');
    var obj_age = document.getElementById('age');
     // lấy giá trị từ obj trên
     var name = obj_name.value;
     var age = obj_age.value;
     // lấy obj của result theo id
     var obj_result = document.getElementById('result');
     //set text HTML cho obj trên
     obj_result.innerHTML = "Họ tên của bạn là :" + name +"<br />" +" Tuổi của bạn là :" + age + "tuổi";
     // biến event chống load lại web khi ấn result
     event.preventDefault();
})