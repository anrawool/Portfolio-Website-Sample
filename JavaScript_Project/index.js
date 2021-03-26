
/*
JavaScript Tutorial:

2. Ways to print in JavaScript:
alert("Hello");
document.write("Do not use this. please!");

2. JavaScript console API:
console.log("Hello World");
console.warn("this is a warning");
console.error("This is a error!");

3. JavaScript variables
What Are Variables? —— Containers to store data values
var number1 = 34;
var number2 = 56;

console.log(number1 + number2 + " is the answer");

4. Data types in JavaScript


Numbers
var num1 = 845;
var num2 = 345;

String
var str1 = "this is a string!";
var str2 = 'this is a string!';

Objects

var marks = {
    ravi: 95,
    shubham: 100,
    harry: 0
}


Booleans

var a = true;
var b = false;

console.log(marks, a, b);


var und;
und = marks;
console.log(und);

var n = null;
n = "Nothing";
console.log(n);


At a very high level, there are two types of data types in JavaScript
1. Primitive data type: undefined, null, string, number, boolean, symbol
1. Reference data type: Arrays and Objects


var arr = [1, 2, 4, 57, 7, 8, 95, 'bablu', 3];

console.log(arr[7]);

Operators in JavScript

var c = 34;
var h = 56;
console.log("The value of cd + h is ", c + h);
console.log("The value of cd + h is ", c - h);

var x = 34;
var y = 56;
console.log(x == y);
console.log(x >= y);
console.log(x <= y);
console.log(x < y);
console.log(x > y);

console.log(true || true);
console.log(true || false);
console.log(false || true);
console.log(false || false);

Logical not
console.log(!false);
console.log(!true);


// Functions (DRY - DO Not Repeat Yourself)

function avg(a, b) {
    return (a + b) / 2;
}

c1 = avg(4, 6);
c2 = avg(4, 60);

// console.log(c2, c1)

// Conditionals in JavaScript
var age = prompt("What is your age?");
if (age < 2) {
    console.log("your are a toddler");
} else if (age > 18 && age < 100) {
    console.log("Your are a grown up");
}
else {
    console.log("You are old.");
}


// For loops

var arr = [1, 2, 3, 4, 5, 6, 6, 7];

for (var i = 0; i < arr.length; i++) {
    if (i == 2) {
        // break;
        console.log("I am still here!")
        continue;
    }
    console.log(arr[i])
}

arr.forEach(function (element) {
    console.log(element);
})

let j = 0;
while (j < arr.length) {
    console.log(arr[j]);
    j++;
}

do {
    console.log(arr[j]);
    j++;
} while (j < arr.length);


var newItem = "New One";
let myArr = ["fan", "camera", 34, null, true];
Array Methods

myArr.pop();
console.log(myArr.push(newItem));
console.log(myArr);
*/

// String Methods in JavaScript 
let myString = "My String!!";
// console.log(myString.length);
// console.log(myString.indexOf("s"));
console.log(myString.replace("String", "string"));
// console.log(myString.slice(0, 3));

myDate = new Date();
// console.log(myDate.getTime());
// console.log(myDate.getFullYear());
// console.log(myDate.getDay());
// console.log(myDate.getMinutes());