var obj_select = document.getElementById('country');
obj_select.addEventListener('change' , function(){
    var text =this.options[this.selectedIndex].text;
    var text2 =  "Bạn vừa chọn quốc gia: " + text;
    alert(text2);
})