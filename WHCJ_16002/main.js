$(document).ready(function () {
  $("#form").submit(function () {
    var error = "";
    var result = "";
    var name = $("#name").val();
    var add = $("#add").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    var filter = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var obj_timeclass = $("#timeclass");
    var obj_gender = $("#gender");
    var obj_course = $("#course");
    if (
      name == "" ||
      obj_gender == "" ||
      add == "" ||
      phone == "" ||
      email == "" ||
      timeclass == ""
    ) {
      error = "Không được để trống";
    } else if (!filter.test(email)) {
      error = "Email không hợp lệ";
    } else if (!isNaN(name)) {
      error = "Không đúng định dạng name";
    } else if (isNaN(phone)) {
      error = " Không đúng định dạng số";
    }
    if (!error) {
      for (var i = 0; i <= obj_gender.length; i++) {
        if (obj_gender[i] === true) {
          var gender = obj_gender[i].val();
        }
        return gender;
      }
      for (var j = 0; j <= obj_timeclass.length; j++) {
        if (obj_timeclass[j] === true) {
          var timeclass = obj_timeclass.val();
        }
        return timeclass;
      }
      var course = obj_course.options[obj_course.selectedIndex].text;
      result =
        "Họ tên của bạn là: " +
        name +
        "</br>" +
        " Giới tính của bạn là: " +
        "</br>" +
        gender +
        "</br>" +
        "Địa chỉ của bạn là: " +
        add +
        "</br>" +
        "Số điện thoại của bạn là:" +
        phone +
        "</br>" +
        "Email của bạn là: " +
        email +
        "</br>" +
        "Khóa học của bạn là: " +
        course +
        "Giờ học của bạn là: " +
        timeclass;
    }
    $('error').innerHTML = error;
    $('result').innerHTML = result;
    event.preventDefault();
  });
});

// $(document).ready(function()// hàm bắt đầu
// {
//     var error = "";
//     var result = "";
//     $('#form').submit(function() //  giống thuộc tính submit bằng nút regester
//     {
//        var name = $('#name').val(); // gọi giá trị của ô name theo id name
//        var obj_gender = $('#gender');
//        var add = $('#add').val();
//        var phone = $('#phone').val();
//        var email = $('#email').val();
//        var filter = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
//        var timeclass = $('timeclass');
//        if(!filter.test(email)){
//         error = " email không hợp lệ";
//     }else if( name == "" || obj_gender == "" || add == "" || phone == "" || email == "" || timeclass == ""){
//         error = "Không được để trống";
//     }
//     else if(!isNaN(name)){
//         error = "Không đúng định dạng tên";
//     } else if(isNaN(phone)){
//         error = " Phải nhập số";
//     }
//     else if( !error){
//         for (var  i = 0; i < obj_gender.length; i++){
//             if(obj_gender[i] === true){
//                 var gender = obj_gender[i].val();
//             }
//            }
//         var course = $('#course').options[course.selectedIndex].text;
//         var timeclass = $('timeclass').val();
//         for (var i = 0 ; i <course.length; i++){
//             if (course[i].checked === true){
//                var choosecourse = course[i].value ;
//             }
//         }
//     }
//     result.innerHTML = "Họ tên của bạn là: " + name + "</br>" + " Giới tính của bạn là: " + "</br>" + gender + "</br>" + "Địa chỉ của bạn là: " + add + "</br>" + "Số điện thoại của bạn là:" + phone + "</br>" +"Email của bạn là: " + email + "</br>" + "Khóa học của bạn là: " + choosecourse + "Giờ học của bạn là: " + timeclass ;
//     event.preventDefault();
//     })

// })
