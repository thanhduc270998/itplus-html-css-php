var obj_form = document.getElementById("form");

obj_form.addEventListener("submit", function () {
  var obj_fname = document.getElementById("fname");
  var fname = obj_fname.value;

  var obj_email = document.getElementById("email");
  var email = obj_email.value;

  var obj_uname = document.getElementById("uname");
  var uname = obj_uname.value;

  var obj_password = document.getElementById("password");
  var password = obj_password.value;

  var obj_gender = document.getElementsByName("gender");
  for (var i = 0; i < obj_gender.length; i++) {
    if (obj_gender[i].checked === true) {
     var  gender = obj_gender[i].value;
    }
  }
  var obj_result = document.getElementById('result');
  obj_result.innerHTML = "Tên đầy đủ của bạn là" + fname + "<br/>" + "Email ID của bạn là" + email + "<br/>" +"Username của bạn là" + uname + "<br/>" + "Password của bạn là" + password + "<br/>" + " Giới tính của bạn là: " + gender;
  event.preventDefault();
});

// phương thức function arrow

/*obj_form.addEventListener("submit", () => {
  // do something
});*/
