function duplicateCount(text){
    let countChar = [];
    let duplicate = 0;
    let stringLower = text.toLowerCase()

    for (let index = 0; index < stringLower.length; index++) {
        let string = stringLower[index];
        if (countChar[string]) {    
            countChar[string]++;
        }else{
            countChar[string] = 1;
        }
    }

    for (let key in countChar) {
        if (countChar.hasOwnProperty(key)) {
            let value = countChar[key];
            
            if (value > 1) {
                duplicate++;
            }
        }
    }
    return duplicate;
  }

    let text = "Indivisibilities";
    console.log(duplicateCount(text))