
function solve(s) {
    let result = 0;
    let temp = 0;

    for (let i = 0; i < s.length; i++) {
      if ("aeiou".indexOf(s[i]) === -1) {
        let consonantValue = s.charCodeAt(i) - 96; 
        temp += consonantValue;
      } else {
        temp = 0;
      }
      if (temp > result) {
        result = temp;
      }
    }
    return result;
  }
  
    solve("zodiacs");   // Output: 26
    console.log(solve("zodiacs"))
  