var obj_input = document.getElementById('alert');
obj_input.addEventListener('keyup' , function(){
    var input = obj_input.value;
    var string ="Chuỗi bạn đang nhập là: " + input;
    alert(string);
})