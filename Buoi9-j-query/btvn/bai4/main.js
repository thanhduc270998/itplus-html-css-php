$(document).ready(function(){
   $('#form'),submit(function(){
    var error = '';
    var result = '';
    var number_a = $('#number_a').val();
    if (number_a == ''){
        error = 'Vui lòng không bỏ trống';
    } else if(isNaN(number_a) ){
        error = 'Vui lòng nhập đúng định dạng số';
    }   else if(!error){
        number_a = parseInt(number_a);
        for(var i = 2 ; i <= sqrt(number_a) ; i++){
            if (number_a % i == 0){
                error = 'Số này không có dãy số nguyên tố';
            }
        } 
        result = 'Số nguyên tố là' + number_a;
    }
   })
    $('#result').html(result);
    $('#error').html(error);
})