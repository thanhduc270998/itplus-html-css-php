//Đối tượng Date
var date = new Date(); // trả về thời gian hiện tại , nếu bỏ new đi thì dùng type off sẽ trả về 1 chuỗi
var year = date.getFullYear(); // trả về năm
var month = date.getMonth() + 1; // trả về tháng
var day = date.getDate(); // trả về date
console.log(`${date} \ ${month} \ ${year}`);