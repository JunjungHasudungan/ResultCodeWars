function disemvowel(stringValue) {
    let result = "";
    for (var i = 0; i < stringValue.length; i++) {
        if ("aeiou".indexOf(stringValue[i].toLowerCase()) === -1) {
            result += stringValue[i];
        }
    }
    return result;
}
let stringValue = "This website is for losers LOL!";
console.log(disemvowel(stringValue));
