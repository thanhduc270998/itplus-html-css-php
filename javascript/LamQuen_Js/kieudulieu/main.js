/*kiểu dữ liệu trong javascript

1.  Dữ liệu nguyên thủy - Primitive Data
- Number
- String
- Boolean
- Undefined
- Null
- Symbol
2. Dữ liệu phức tạp - Complex Data
- Function
- Object
*/
var a = 1 ;
var b = 2;
var c = 1.5;

//string type
var fullName = 'Truong Thanh Duc';

// Boolean type
var isSuccess = true;
// Underfined type
var age;

//Null
var isNull = null; // nothing 

//Symbol 
var id = Symbol('id'); //unique
var id2 = Symbol('id');

//function
var myFunction = function(){
    alert('Hi. Xin chào các bạn')
}
 // object types
 var myObject = {
     name: 'Truong Thanh Duc',
     age: 18,
     adress: 'Ha Noi',
     myFunction: function(){
         
     }
 };
 var myArray = [
     'Javascript',
     'PHP',
     'HTML , CSS']
 ;
 console.log(typeof myArray);