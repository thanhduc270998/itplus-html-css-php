$(document).ready(function(){
    // jquery selector
    // - lấy ra đối tượng form, gọi sự kiện submit trên nó
    var error = '';
    var result = '';
    $('#form').submit(function(){
        var number_r = $('#number_r').val();
        var number_d = $('#number_d').val();
        
        if(number_d == '' || number_r == ''){
            error = 'Không được bỏ trống giá trị';
        } else if(isNaN(number_d) || isNaN(number_r)){
            error = ' Gía trị phải là số';
            $('#number_d').focus();
        } else if (error == ''){
            number_d = parseInt(number_d);
            number_r = parseInt(number_r);
            var rectangularArea = number_d * number_r;
            result ='Diện tích hình chữ nhật là: ' + rectangularArea;
        }
        $('#result').html(result);
        $('#error').html(error);
        result = '';
        event.preventDefault();

    })
})