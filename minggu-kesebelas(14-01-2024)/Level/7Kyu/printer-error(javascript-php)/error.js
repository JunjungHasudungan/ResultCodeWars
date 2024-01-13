function printerError(s) {
    let countError = 0; // penampung jumlah error
    for (var index = 0; index < s.length; index++) { // looping sebanyak jumlah string
        if (s[index] > 'm') { // chek bila karakter string diatas / lebih karakter m
            countError++; // hitung karakter diatas / lebih besar dari m
        }
    }
    return `${countError} / ${s.length}`; // mengembalikan jumlah error dengan format contoh 8/22
}
let s = 'aaaxbbbbyyhwawiwjjjwwm';

console.log(printerError(s));