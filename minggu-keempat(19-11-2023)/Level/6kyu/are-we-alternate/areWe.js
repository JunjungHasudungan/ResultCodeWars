function isAlt(s){
    let volwes = ['a', 'i', 'u', 'e', 'o'];
    for (let index = 0; index < s.length - 1; index++) {
        if ((volwes.includes(s[index]) === volwes.includes(s[index + 1]))) {
            return false;
        }
    }
    return true;
}

let s = "banana";
console.log(isAlt(s));