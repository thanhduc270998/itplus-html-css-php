var obj_form = document.getElementById("form");

obj_form.addEventListener("submit", function (event) {
  var result = "";
  var error = "";

  var obj_uname = document.getElementById("uname");
  var uname = obj_uname.value;
  var obj_password = document.getElementById("password");
  var password = obj_password.value;
  var obj_email = document.getElementById("email");
  var email = obj_email.value;
  var obj_name = document.getElementById("name");
  var name = obj_name.value;
  var obj_phone = document.getElementById("phone");
  var phone = obj_phone.value;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if (!uname) {
    error = "Bạn phải nhập username";
    obj_uname.focus();
  } else if (!password) {
    error = "Bạn phải nhập password";
    obj_password.focus();
  } else if (!email) {
    error = "Bạn phải nhập email";
    obj_email.focus();
  } else if (!name) {
    error = "Bạn phải nhập name";
    obj_name.focus();
  } else if (!phone) {
    error = "Bạn phải nhập phone";
    obj_phone.focus();
  } else if (isNaN(phone)) {
    error = " Phải nhập số";
  } else if (!filter.test(email)) {
    error = "Địa chỉ email không hợp lệ , ví dụ :Example@gmail.com";
  } else if (!isNaN(name)) {
    error = "Trường name không có số";
  }

  if (!error) {
    result =
      " Username của bạn là: " +
      uname +
      "<br/>" +
      "Password của bạn là:" +
      password +
      "<br/>" +
      "Email của bạn là:" +
      email +
      "<br/>" +
      "Tên của bạn là: " +
      name +
      "<br/>" +
      "Số điện thoại của bạn là: " +
      phone;
  }

  document.getElementById("result").innerHTML = result;
  document.getElementById("error").innerHTML = error;
  event.preventDefault();
});
