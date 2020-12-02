$(document).ready(function(){
    var error = '';
    var result = '';
    $('#form').submit(function(){
        var r = $('#r').val();
        if( r == ''){
            error = 'Bạn phải nhập bán kính hình tròn';
        } else if(isNaN(r)){
            error = 'Sai định dạng, bạn phải nhập số';
            $('#r').focus();
        } else if(!error){
            r = parseInt(r);
            var pi = 3.14;
            var rectArea = pi*r*r;
            var recPerimeter = 2*r*pi;
            result = 'Diện tích hình tròn là: ' + rectArea + '<br/>' + 'Chu vi hình tròn là: ' + recPerimeter;
        }
       $('#result').html(result);
       $('#error').html(error);
       event.preventDefault();
    })
})