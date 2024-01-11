function solution (roman) {
    const romanNumerals = {
        'I': 1,
        'V': 5,
        'X': 10,
        'L': 50,
        'C': 100,
        'D': 500,
        'M': 1000
    };

    let number = 0;

    for (let i = 0; i < roman.length; i++) {
        const currentVal = romanNumerals[roman[i]];
        const nextVal = romanNumerals[roman[i + 1]];

        if (nextVal > currentVal) {
            number -= currentVal;
        } else {
            number += currentVal;
        }
    }

    return number;
  }
let roman = 'MMXVII'
console.log(solution(roman))