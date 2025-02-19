// JavaScript Loops (For, While, Do-while, Foreach, For-in, For-of)
const arr = [1, 2,'Three', '', 0, null, undefined, {}, [], 233.234, 23E-234, 24E34, Math.PI];
let output = "";

// For loop
for(let i = 0; i < arr.length; i++) {
	output += arr[i] + " ,";
}
console.log("For loop ", output);
output = "";


// While loop
let i = 0;
while(i < arr.length) {
	output += arr[i] + " ,";
	i++;
}
console.log("While loop ", output);
output = "";


// Do-while loop
let j = 0;
do {
	output += arr[j] + ", ";
	j++;
} while(j < arr.length);
console.log("Do-while loop ", output);
output = "";

// Foreach loop
arr.forEach(function(value, key) {
	output += `${key} = ${value} ,`;
});

console.log("Foreach loop", output);
output = "";

// For-in loop
for(let item in arr) {
	output += arr[item] + " ,";
}
console.log("For-in loop ", output);
output = "";


// For-of loop
for(let i of arr) {
	output += `${i}, `;
}
console.log("For-of loop ", output);
output = "";
