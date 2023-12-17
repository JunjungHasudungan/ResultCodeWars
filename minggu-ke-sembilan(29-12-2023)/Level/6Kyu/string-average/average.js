function averageString(str) {
   let temp = 0;
   let arrWord = str.split(' ');
   let values = {
    'zero': 0,
    'one': 1,
    'two': 2,
    'three': 3,
    'four': 4,
    'five': 5,
    'six': 6,
    'seven': 7,
    'eight': 8,
    'nine': 9,
   }

    if(str === "") {
        return "n/a";
    }

    for (let index = 0; index < arrWord.length; index++) {
        const word = arrWord[index];
        if (!values.hasOwnProperty(word)) {
            return 'n/a';
        }
        temp += values[word];
    }
    let avg = Math.floor(temp / arrWord.length)
    return Object.keys(values).find(key => values[key] === avg);
  }
let str = "zero nine five two"
// let str = "";
// averageString(str)
console.log(averageString(str))