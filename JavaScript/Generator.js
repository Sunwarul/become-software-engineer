function* makeGenerator()
{
    console.log('Before 1');
    yield 1
    console.log('After 1');
    console.log('Before 2');
    yield 2
    console.log('After 2');
    console.log('Before 3');
    yield 3
    console.log('After 3');
}

const generator1 = makeGenerator();
const generator2 = makeGenerator();

console.log(generator1.next());
console.log(generator1.next());
console.log(generator1.next());
console.log(generator1.next());

console.log(generator2.next());
console.log(generator2.next());
console.log(generator2.next());
console.log(generator2.next());