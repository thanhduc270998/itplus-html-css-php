$(document).ready(function(){
    var error = '';
    var result = '';
    $('#form').submit(function(){
        var number = $('#number').val();

        if(number == ''){
            error = 'Không được để trống , hãy nhập số';
        } else if(isNaN(number)){
            error = 'Định dạng phải là số';
            $('#number').focus();
        } else if(!error){
            number = parseInt(number);
            var perimeterSquare = number*4;
            var areaSquare = number*number;
            result = 'Diện tích hình vuông là: ' + areaSquare + '<br />' + 'Chu vi hình vuông là:' + perimeterSquare;
        }

        $('#result').html(result);
        $('#error').html(error);
        result = '';
        event.preventDefault();
    })
})