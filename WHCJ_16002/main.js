$(document).ready(function(){
    var error = $('#error').val();
    var result = $('#result').val();
    $('#form').validate({
        rules: {
            name:{
                required: true,
                minlenght: 3,
            },
           gender:{
                required: true,
            },
            address:{
                required: true,
            },
            phone:{
                number:true,
            },
            email:{
                required:true,
            },
        },
        messages:{
            name:{
                required: "Phải nhập họ và tên",
                minlenght: "Không được nhỏ hơn 3 kí tự",
            },
            gender:{
                required: "Phải lựa chọn giới tính",
            },
            address:{
                required: "Phải nhập địa chỉ",
            },
            phone:{
                number: 'Phải nhập số',
            },
            email:{
                required: ' Phải nhập địa chỉ email',
            },
        },
        errorPlacement: function(error,element){
            error.insertAfter(element);
            error.innerHTML('#validate');
        }
    })
    $('#form').submit(function(){
       var name = $('#name').val();
       var obj_gender = $('#gender');
       for (var  i = 0; i < obj_gender.length; i++){
        if(obj_gender[i] === true){
            var gender = obj_gender[i].val();
        }
       }
       var add = $('#add').val();
       var phone = $('#phone').val();
       var email = $('#email').val();
       var filter = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
       if(!filter.test(email)){
           error = " email không hợp lệ"; 
       }
       var course = $('#course').options[course.selectedIndex].text;

       var timeclass = $('timeclass').val();
       for (var i = 0 ; i <course.length; i++){
           if (course[i].checked === true){
               var choosecourse = course[i].value ; 
           }
       }

    })

})