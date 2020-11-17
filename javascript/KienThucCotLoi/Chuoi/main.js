/* Chuỗi trong Javascript
1. tạo chuỗi 
- các cách tạo chuỗi
- nên dùng cách nào ? lí do?
- kiểm tra data type
2. một số case sử dụng backslash (/)
3. xem độ dài chuỗi
4, xem độ dài chuỗi - chú ý độ dài khi viết code
5. teamplate string es6 
*/
// var fullName = new String('Trương Thành Đức là \'Siêu nhân\'');
// console.log(fullName.length);

// var firstName = 'Đức';
// var lastName = 'Trương';
// console.log(`Tôi là: ${firstName} ${lastName}`);
// const commentText = '"Học chưa hiểu là học chưa đủ!"';
// const authorName = 'Sơn Đặng:';
// const fullCommentText = `${authorName} ${commentText}`

//Làm việc với chuỗi

// var myString = 'Học JS tại SBGroup'
//   Keyword: Javascript string methods
//   1. length
// console.log(myString.length)

//   2. find index
// console.log(myString.search('JS')) // phương thức search  hỗ trợ tìm kiếm theo biểu thức chính quy

// console.log(myString.indexOf('JS'))
//indexOf là trả về vị trí đầu của từ
// lastIndexOf trả về vị trí cuối của từ

//   3. cut string cắt chuỗi theo vị trí muốn cắ từ 0 1 2 3 4 5
// console.log(mySring.slice(4, 6))

//   4. replace
// console.log(myString.replace(/JS/g , 'Javascript'))
// thay đổi vị trí muốn thành chữ mà mình muốn

//   5. convert to upper case chuyển đổi chuỗi thành chữ hoa
// console.log(myString.toUpperCase())

//   6. convert to lower case chuyển đổi chuỗi thành chữ thường
// console.log(myString.toLowerCase())

//   7. trim cắt loại bỏ kí tự khoảng trắng ở hai đầu
// console.log(mySring.trim().length)

// //   8. split cắt chuỗi thành aray , tìm điểm chung để cắt
// var languages = 'Javascript, PHP, Ruby'
// console.log(languages.split(', '))
// //   9. get a character by index lấy 1 kí tự bởi 1 index cho trc
// const myString2 = 'Duc Truong';
// console.log(myString2[2]) // nếu k có kí tự thì trả về undefine
// // console.log(myString2.charAt(2)) // cách 2
