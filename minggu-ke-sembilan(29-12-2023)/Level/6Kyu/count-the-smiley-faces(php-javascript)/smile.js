function countSmileys(arr) {
    let countFacees = 0;
    for (let index = 0; index < arr.length; index++) {
        let value = arr[index];
      if (
        (value.length === 2 || value.length === 3) && 
        (value[0] === ':' || value[0] === ';') &&
        (value[value.length - 1] === ')' || value[value.length - 1] === 'D') &&
        (value.length === 2 || (value.length === 3 && (value[1] === '-' || value[1] === '~')))
      ) {
        countFacees++;
      }
    }
    return countFacees;
}
let arr =  [':D',':~)',';~D',':)'];
console.log(countSmileys(arr))