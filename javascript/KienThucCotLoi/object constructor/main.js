//Object constructor : bản thiết kế của ngôi nhà
/*
function User(firstName , lastName , avatar){
this.firstName = firstName;
this.lastName = lastName;
this.avatar = avatar;
 this.getName = function(){
     return ` ${this.firstName} ${this.lastName}`;
 }
}
var author = new User('Duc' , 'Truong' , 'Avatar');
var user = new User('Sơn', 'Đặng' , 'Avatar');

author.title = 'Chia sẻ dạo tại F8';
user.comment = 'Alo alo';


console.log(author.getName());
console.log(user);
*/



/*
Object prototype -  basic

1. prototype là gì ?
là nguyên mẫu , khuôn để tạo lên 1 đối tượng , nguyên liệu để tạo lên ngôi nhà

2 . sử dụng khi nào 
*/
function User(firstName , lastName , avatar){
    this.firstName = firstName;
    this.lastName = lastName;
    this.avatar = avatar;
     this.getName = function(){
         return ` ${this.firstName} ${this.lastName}`;
     }
    }
// khác struc ở việc thêm User ngoài function để các user ở chỗ khác kế thừa lại tất cả 
//các thuộc tính ở className và getClassName qua prototype
    User.prototype.className = 'Sbgroup';
    User.prototype.getClassName = function(){
        return this.className;
    }

    var author = new User('Duc' , 'Truong' , 'Avatar');
    var user = new User('Sơn', 'Đặng' , 'Avatar');
    
    author.title = 'Chia sẻ dạo tại F8';
    user.comment = 'Alo alo';
    
    
    console.log(author.getName());
    console.log(user);