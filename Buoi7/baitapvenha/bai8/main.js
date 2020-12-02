var obj_form = document.getElementById('form');
obj_form.addEventListener('submit' , function(){
    var obj_fname = document.getElementById('fname');
    var fname = obj_fname.value;
    var obj_lname = document.getElementById('lname');
    var lname = obj_lname.value;
    var obj_email = document.getElementById('email');
    var email = obj_email.value;
    var obj_telephone = document.getElementById('telephone');
    var telephone = obj_telephone.value;
    var obj_result = document.getElementById('result');
    obj_result.innerHTML = 'FirstName của bạn là :' + fname + '<br />' +'LastName của bạn là :' + lname + '<br />' +'Email của bạn là :' + email + '<br />'+ 'Telephone của bạn là :' + telephone ;
    event.preventDefault();
})