// Object trong Javascript
/*var emailKey = 'email';

var myInfo = {
    name: 'Đức Trương',
    age: 18,
    address: 'Ha Noi, Vn',
    [emailKey]: 'truongthanhduc270998@gmail.com',
    getName: function(){
        return myInfo.name;
    }
    getAge: function(){

    }
}; 
// function --> phương thức / method
// Other --> thuộc tính / property
// myInfo.email = 'truongthanhduc270998@gmail.com';

console.log(myInfo); */




// Object constructor

function User(firstName, lastName, avatar){
this.firstName = firstName;
this.lastName = lastName;
this.avatar = avatar;
}
this.getName = function(){
    return `${this.firstName} ${this.lastName}`
}
var author = new User('Đức', 'Trương', 'Avatar');
var user = new User('Vũ' , 'Nguyễn', 'Avatar');
 author.title = 'Chia sẻ tại sbgroup';
 user.comment = 'đây là comment';
console.log(author);
console.log(user);
