function solution(string) {
    let result = ""; // variable penampung hasil

    for (let i = 0; i < string.length; i++) { // melakukan looping sebanyak jumlah string
        // Jika karakter saat ini adalah huruf kapital, tambahkan spasi sebelumnya
        if (i > 0 && string[i] === string[i].toUpperCase()) {  // pengecekan dan lakukan Uppercase
            result += " "; // memberikan nilai kosong berbentuk spasi kedalam variable penampung
        }
        result += string[i]; // memasukkan nilai string kedalam variable penampung hasil
    }
    return result; // mengembalikan hasil
}

let string = 'camelCasing'
console.log(solution(string))