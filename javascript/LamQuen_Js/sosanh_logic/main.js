// Hiểu hơn về câu lệnh điều kiện và phép so sánh
var a = 1;
var b = 2;
var result = 'A' && undefined && 'C' && 'D';

//Đối với toán tử không xác định ABCD , toán tử || thì sẽ lấy A đầu tiên
//Đối với toán tử không xác định ABCD , toán tử && thì sẽ lấy D cuối cùng
//Đối với toán tử không xác định AB null D , toán tử && thì sẽ lấy null
//Đối với toán tử không xác định A undefined CD , toán tử && thì sẽ lấy undefineđ
/*nếu nằm trong 1 trong 6 điều kiện sau thì mặc định kết quả sẽ trả về false 
- ''
- null
- undefined
- NaN
- false
còn khi k thuộc 6 dk trên thì trả về true*/

if(result){
    console.log('DIEU KIEN DUNG');
}else{
    console.log('DIEU KIEN SAI');
}