process.stdin.resume()
process.stdin.setEncoding('utf-8')

let inputString = ''
let currentLine = 0

process.stdin.on('data', data => {
    inputString += data
})

process.stdin.on('end', () => {
    inputString = inputString.trim().split("\n").map(line => {
        return line.trim()
    })
    main()
})

function readLine() {
    return inputString[currentLine++]
}

function main() {
    const input = readLine();
    const horseShoes = input.split(' ');
    const set = new Set(horseShoes);
    console.log(horseShoes.length - set.size);
}