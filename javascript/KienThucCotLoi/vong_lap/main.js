
//vòng lặp - loop

// 1. for - lặp với điều kiện đúng
for (var i = 1 ; i <= 1000 ; i++ ){
    console.log(i);
    
}
// 2. for/in - lặp qua value của đối tượng
// 3. for/of - lặp qua value của đối tượng
// 4. while - lặp khi điều kiện đúng
// 5. do / while - lặp ít nhất 1 lần , sau đó lặp khi điều kiện đúng


//for loop

var myArray = [
    'Javascript',
    'PHP',
    'Java',
    'Dart',
    'Ruby',
    'Python'
];

var arrayLength = myArray.length;

for (var i = 0 ; i < arrayLength; i++){
    console.log(myArray[i]);
}

//for/in loop

var myInfo = {
    name: 'Trương Thành Đức',
    age: 18,
    address: 'Ha Noi, VN' 
};

for (var key in myInfo){
    console.log(myInfo['key-']); // key trong myInfo bao gồm name , age , address
}


// ví dụ khác
var languages = [
    'Javascript',
    'PHP',
    'Java',
    'Dart',
    'Ruby',
    'Python'
];

for (var key in languages ){
    console.log(languages[key]);
}

// cách đếm chuỗi
 var myString = 'Javascript';
 var languages = 'Javascript';
 for (var key in languages){
     // console.log(languages[key]); đếm số phần tử trong chuỗi
    console.log(key); // in từng phần tử trong chuỗi ra
 }



 // for / of loop
  var languages = [
    'Javascript',
    'PHP',
    'Java',
    'Dart'
  ];

  for (var value of languages){
      console.log(value); // in ra từng phần tử trong chuỗi
  }


  // ví dụ 2
  var myInfo = {
    name:'Thanh Duc',
    age: 18
  };
  for (var value of Object.keys(myInfo)){
      console.log(value); // in ra từng phần tử trong chuỗi
      // Thanh duc
      // 18
  }




  // while loop

  var languages = [
    'Javascript',
    'PHP',
    'Java',
    'Dart',
    'Ruby',
    'Python'
];
  var i = 0;

  while(i < languages.length){
      
      console.log(languages[i]);
      i++;
  }