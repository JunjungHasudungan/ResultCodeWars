function numbersWithDigitInside(x, d) {
    let solved = [];

    for (let i = 1; i <= x; i++) {
        if (String(i).includes(String(d))) {
            solved.push(i);
        }
    }

    if (solved.length === 0) {
        return [0, 0, 0];
    }

    const countSolved = solved.length;
    const sumSolved = solved.reduce((acc, num) => acc + num, 0);
    const productSolved = solved.reduce((acc, num) => acc * num, 1);

    return [countSolved, sumSolved, productSolved];
}


console.log(numbersWithDigitInside(20, 2)); 
