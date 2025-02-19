/**
 * Arithmetic Operators: +, -, *, /, **, %, ++, --, +=, -=, *=, /=, %=, **=
 * Comparison Operators: >, <, >=, <=, ==, ===, !=, !==, ?
 * Logical Operators: &&, ||, !
 * Type Operators: typeof, instanceof
 * Bitwise Operators: &, |, ~, ^, <<, >>, 
 * Assignments: >>=, <<=, >>>=, &=, ^=, ~=, |=, 
 * Other: `yield`, `,`, `?:`, `??`, `in`, `new`, 
 */

console.log( 3 ** 3) // 27

console.log(null ?? 'fallback') // fallback
console.log(false ?? 'fallback') // false
console.log(undefined ?? 'fallback') // fallback
console.log( null ?? undefined ?? 'fallback') // fallback

console.log({id: 1, name: 'John', age: 30} ?. age) // 30
console.log({id: 1, name: 'John', age: 30} ?. phone) // undefined

console.log([] instanceof Object); // true
console.log([] instanceof Array); // true
console.log([] instanceof Number); // false

console.log({} instanceof Object); // true
console.log({} instanceof Array); // false
console.log({} instanceof Number); // false

console.log(typeof({})); // object
console.log(typeof([])); // object
console.log(typeof(100)); // number