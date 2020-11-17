/**
 Mảng trong Javascript - array
 1.Tạo mảng
 -cách tạo
 - sử dụng cách nào ? tại sao
 - kiểm tra data type?
 2.truy xuất mảng
 - độ dài mảng
 - lấy phần tử theo inđex
 */
 /*   var languages = [
        'Javascript',
        'PHP',
        'Ruby',
        'Dart',
        null,
        undefined,
        function(){
            
        } 
    ];

console.log(languages) */






/*Làm việc với array
1. To string // chuyển kiểu dữ liệu bất kì thành chuỗi
2.  Join // biến từ array thành 1 chuỗi
3.  Pop // xóa element cuối mảng và trả về phần tử đã xóa
4.  Push // thêm 1 hoặc nhiều phần tử vào cuối mảng ,và trả về độ dài mới của mảng
5.  Shift //xóa element đầu mảng và trả về phần tử đã xóa
6.  Unshift // thêm 1 hoặc nhiều phần tử vào đầu mảng ,và trả về độ dài mới của mảng
7.  Splice // xóa cắt chèn phần tử mới vào mảng
console.log(languages.splice(1 , 2 , 'Dart' , 'Java')) // 1 vị trí con trỏ , 2 số phần tử muốn xóa , từ 3 trở đi là vị trí element muốn chèn vào
8.  Concat // hàm nối array
9.  Slice // sd để cắt 1 vài element của mảng
*/
 var languages = [
        'Javascript',
        'PHP',
        'Ruby',
        'Dart',
    ];
    var languages2 = [
        'Javascript',

        'Dart',
    ];
console.log(languages.slice(0));
function run(animals) {

    if(animals.length == 0)
        animals.unshift('Cat','Mouse');
    else 
        if(animals.length == 1)
            animals.unshift('Elephant');
        if(animals.length > 2)
            animals.splice(1,1,'Monkey','Tiger')
    return animals;
    }
