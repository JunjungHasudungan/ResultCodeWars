function digPow(n, p) {
    const digits = n.toString().split('').map(Number);
    let currentSum = 0;
    for (let i = p, j = 0; i < p + digits.length; i++, j++) {
        currentSum += Math.pow(digits[j], i);
    }
    if (currentSum % n === 0) {
        return currentSum / n;
    } else {
        return -1;
    }
}
console.log(digPow(92, 1)); 