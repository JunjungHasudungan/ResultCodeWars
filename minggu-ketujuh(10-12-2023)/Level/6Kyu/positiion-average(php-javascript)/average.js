function posAverage(s) {

    const substrings = s.split(', ') // mengubah sting kedalam format array
    const lengSubstring =  substrings[0].length // mengukur jumlah ukuran elemen string
    let post = 0
    
    for (let index_1 = 0; index_1 < substrings.length; index_1++) {
        for (let index_2 = index_1  + 1; index_2 < substrings.length; index_2++) {
            for (let index_3 = 0; index_3 < substrings[index_2].length; index_3++) {
                if (substrings[index_1][index_3] === substrings[index_2][index_3]) {
                    post++
                }
            }
        }
    }
    const numPositions = lengSubstring * ((substrings.length * (substrings.length - 1)) / 2);
    return 100 * (post / numPositions)
}
let s =  "444996, 699990, 666690, 096904, 600644, 640646, 606469, 409694, 666094, 606490";

console.log(posAverage(s));