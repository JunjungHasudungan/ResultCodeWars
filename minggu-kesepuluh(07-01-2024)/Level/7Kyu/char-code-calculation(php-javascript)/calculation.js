function calc(x){
 // Mengonversi setiap karakter ke kode karakter ASCII dan menggabungkannya
 const charCodes = Array.from(x).map(char => char.charCodeAt(0)); // Array(3) [ 65, 66, 67 ]

 const total1 = charCodes.join('');  // mengubah array ke string

 // Menggantikan setiap kemunculan angka 7 dengan angka 1
 const total2 = total1.replace(/7/g, '1');

    // [...total] memmasukkan nilai total kedalam array
    // dilakukan reduce atau menjadikan nilai array menjadi tunggal
 return [...total1].reduce((acc, digit) => acc + parseInt(digit), 0) - 
        [...total2].reduce((acc, digit) => acc + parseInt(digit), 0);
}

let x = 'ABC';
console.log(calc(x))