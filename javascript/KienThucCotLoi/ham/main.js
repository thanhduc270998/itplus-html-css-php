/**
1.  Hàm ?
    -Một Khối mã
    -Làm 1 việc cụ thẻ
2.  Loại Hàm
    -Built-in
    -Tự định nghĩa
3.  Tính chất
    -Không thực hiện 
    -Sẽ thực thi khi được gọi
    - Có thể nhận tham số
    - Có thể trả về 1 giá trị 
4.  Tạo hàm đầu tiên

*/

// a-z A-Z 0-9 _ $


// function showDialog(){
//     alert('Hi xin chào các bạn!')
// }
// showDialog();

//Tham số trong funcion
/**
//  function writeLog(message, message2){
//      console.log(message);
//      console.log(message2);
//  }
//  writeLog('Test message', 'Test2');
 1. Tham số?
    -Định nghĩa? là 1 giá trị có thể truyền vào function
    -Kiểu dữ liệu? không giới hạn kiểu dữ liệu
    -Tính private? tính riêng tư , chỉ đc sd trong function
    -1 tham số
    -Nhiều tham số
2,  Truyền tham số
    -1 tham số
    -Nhiều tham số
3.  Arguments?
/*
function writeLog(){
    console.log(arguments)
}
writeLog('Log1' , 'Log2', 'Log3');

    -Đối tượng arguments
    -Giới thiệu vòng for
 */
// function writeLog(){
//     var myString = '';
//    for(var param of arguments){
//     myString += `${param} -`
//    }
// }
// writeLog('Log1' , 'Log2', 'Log3');
// return trong hàm 
function cong(a,b){
    return a.toString() + b.toString(); // nếu trả về chuỗi thì giá trị sẽ nối nhau
}
var result = cong(2,3);
console.log(result);
/**
 Một số điều cần biết về function
 1. Khi function đặt trùng tên? thì sẽ chỉ nhận giá trị cuối
 /**
  * function showMessage(){
    console.log('Message 1');

}
function showMessage(){
    console.log('Message 2');
}
showMessage();


 2. Khai báo biến trong hàm , phạm vi chỉ sd trong function - private
 function showMessage(){
    var fullName = 'Thành Đức';
    console(fullName)
}

showMessage();


 3. Định nghĩa hàm trong hàm - vẫn chạy oke và có tính private - chỉ sd đc trong hàm
 function showMessage(){
    function showMessage2(){
        console.log('Message 2');
    }
    showMessage2();

}

showMessage();
 */





// -----------------------------------------------
/**
Các loại function

1.  Declaration function
2.  Exxpression function
3.  Arrow function

 */
showMessage();
function showMessage(){
    console.log('Declaration function');
}
var showMessage2 = function(){
    console.log('Declaration function');
}
show