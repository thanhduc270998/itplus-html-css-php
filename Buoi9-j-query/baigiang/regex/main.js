// regular expression - biểu thức chính quy
// là 1 pattern (mẫu) cho phép kiểm tra 1 chuỗi có khớp với pattern cho trước hay không
// dùng kiểm tra các gói logic phức tạp
// hại não vì cú pháp phức tạp
// const re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
// return re.test(String(email).toLowerCase());
// VD: kiểm tra 1 chuỗi có kết thúc bằng php1020e hay ko
var pattern = /php1020e$/;
var test = pattern.test('php1020e'); // true
console.log(test); //
// khởi tạo regex có 2 cách
var regex = new RegExp(parttern);
//C2
var regex = /abc/; // object
// test regex, dùng hàm test() trên obj regex
var test = regex.test('123abc');
// các điều kiện hay sử dụng
// phải xuất hiện ở đầu chuỗi: ^
// vd: chuỗi bắt đầu phải là duc
var regex = /^duc/;
var test = regex.test('duc');
console.log(test); //false
//duc =>true
// 123duc => false
// phải xuất hiện ở cuối chuỗi: $
//vd: kiểm tra chuỗi có kết thúc bằng nvmanh hay k
var regex = /duc$/;
// so sánh tương đối: chứa chuỗi đó là đc
var regex = /duc/;
// so sánh tuyệt đối: kết hợp cả ^ và $
// vd: kiểm tra 1 chuỗi có đúng là duc hay k
var regex = /^duc$/;
var test = regex.test('đucucd');
console.log(test); // false
// phải bắt đầu bằng 1 regex, phải kết thúc bằng 1 regex , k quan trọng ở các ký tự ở giữa 2 regex đó
// vd kiểm tra 1 chuỗi bắt đầu = duc , kết thúc = abc, ở giữa là gì cũng đc
var regex = /^duc.*abc$/;
var test = regex.test('ducabc'); // true
//abcduc => false
// phải nằm trong khoảng: 
//[ký_tự_bắt_đầu-ký-tự-kết-thúc]
//vd: kiểm tra 1 chuỗi có chứa ký tự là chuỗi hay không
var regex = /[a-z]/;
var test = regex.test('123456'); // false
// avbc231 => true
// vd: ktra 1 chuỗi có chứa kí tự là chữ thường hoặc chữ hoa
var regex = /[a-zA-Z]/;
//123Z123    = > TRUE
// các miền vi phạm khác
var regex = /[0-9]/;
//abcdef =>false
//abc123 => true
var regex = /[b-e]/;
//vd ktra 1 chuỗi có chứa kí tự nào là chữ thwòng , chữ hoa, số , dấu cách , _ - hay ko
var regex =/[a-zA-Z0-9 -_]/;
// ĐẢO NGƯỢC KẾT QUẢ của khoảng: [^]
// vd : kiểm tra chuỗi k đc chứa ktu nào là chữ
var regex = /[^a-zA-Z]/;
// điều kiện hoặc: |
//vd: kiểm tra 1 chuỗi có chứa text = duc hoặc ttduc hay ko
var regex = /tt|ttduc/;
//duc-ttduc => true
// ducabc =>true
// xuất hiện bao nhiêu lần : {}
//vd: ktra chuỗi có xuất hiện các ký tự số đúng 3 lần hay k
var regex = /[0-9]{3}/;
// 123456 =>false
//abc123 =>true
// 1 bcc 2 def => false
//34abcdef7 => true
//vd: ktra 1 chuỗi có chứa các ký tự chữ nào xuất heiẹn từ 3-5 lần hay k
var regex = /[a-zA-Z]{3,5}/;
//1234 => false
//1a2b3456 => false
//a1b2c3d4 => true
// vd ktra 1 chuỗi xuất heiẹn ít nhất 2 lần ký tự chữ
var regex = /[a-zA-Z]{2,}/;
//vd xuất hiện nhiều nhast 10 ký tự
var regex = /[a-zA-Z]{,10}/;
// điều kiện ko bắt buộc: ?
//vd: kiểm tra 1 chuỗi có xuất hiện số hay là không
var regex = /[0-9]?/;
// afcbj => true
// biểu diễn các kí tự đặc biệt : cần thêm kí tự \ vào trc. các kí tự đặc biệt : {}[]/\+*.$^|?
//vd kiểm tra 1 chuỗi có chứa kí tự $ hay k
var regex = /\$/;
//abc$123 => true
// nhóm các điều kiện lại: ()
var regex = /^([0-9]{2}){1,}$/;
//1234 => true
var test = regex.test('123');
console.log(test);
// 1 số kí tự viết tắt:
// phải là số
var regex = /\d/; //digit
var regex = /[0-9]/;
// không chứa kí tự là số
var regex = /[^0-9]/;
var regex = /\D/;
// chứa kí tự là chữ hoặc số

var regex = /[a-zA-Z0-9]/;
var regex = /\w/; //word
// không chứa kí tự nào là chữ hoặc số
var regex = /\W/;
//chứa kí tự khoảng trống : dấu cách, dấu tab , dấu xuống dòng
var regex =  /\s/; // space
// ngược lại:
var regex = /\S/;
// ví dụ kiểm tra định dạng email:
// phải chứa đúng 1 kí tự @, trước kí tự @ phải là các ký tự chữ hoặc số xuất heiẹn ít nhất 3 lần, sau kí tự@ xuất heiẹn ít nhất 2 lần
var regex = /^[a-zA-Z0-9_]{3,}@[a-zA-Z0-9\.]{2,}$/;
var test = regex.test('abc@gmail.com');