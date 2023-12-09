function scramble(str, arr) {
    let sortedChars = [];
    arr.forEach((charIdx, index) => sortedChars[charIdx] = str[index])
    return sortedChars.join('');
}
console.log(scramble('sc301s',[4,0,3,1,5,2])); 
