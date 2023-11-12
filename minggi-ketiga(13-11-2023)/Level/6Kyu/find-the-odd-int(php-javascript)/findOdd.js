function findOdd(arr) {
  let frequency = {};
  // console.log(arr.length); // 3
  
  for (let index = 0; index < arr.length; index++) {
      let element = arr[index]; // 1, 1, 2
      frequency[element] = (frequency[element] || 0) + 1; // 1, 2, 1
  }

  for (let key in frequency) {
      if (frequency[key] % 2 !== 0) {
          return parseInt(key);
      }
  }
}

let arr = [1, 1, 2];
let result = findOdd(arr);
