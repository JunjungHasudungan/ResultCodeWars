function nthFloyd(n) {
    let total = 0;
    let line = 0;

    while (total < n) {
        line++;
        total += line;
    }
    return line;
}

let n = 15;

console.log(nthFloyd(n));