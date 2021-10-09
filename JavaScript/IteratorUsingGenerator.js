function* makeGenerator() {
    let id = 0;
    while (true) {
        yield id
        id++
    }
}

const generator = makeGenerator();

console.log(generator.next());
console.log(generator.next());
console.log(generator.next());
console.log("\nITERATOR::")

function* makeArrayIteratorGenerator() {
    const array = [1, 2, 3];
    for (let i = 0; i <= array.length; i++) {
        yield array[i];
    }
}

const arrayIterator = makeArrayIteratorGenerator();
console.log(arrayIterator.next())