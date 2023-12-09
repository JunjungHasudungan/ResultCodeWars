function sumOfIntegersInString(s) {
    let total = 0;
    let currentNumber = 0;
    for (let i = 0; i < s.length; i++) {
        if (!isNaN(parseInt(s[i]))) {
            currentNumber = currentNumber * 10 + parseInt(s[i]);
        } else {
            total += currentNumber;
            currentNumber = 0;
        }
    }
    return total += currentNumber;
}
let hasil = sumOfIntegersInString("The30quick20brown10f0x1203jumps914ov3r1349the102l4zy dog");
console.log(hasil);  // Output: 3635