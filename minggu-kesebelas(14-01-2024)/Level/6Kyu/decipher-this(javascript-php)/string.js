function decipherThis(str) {
    // Mengubah string menjadi array
    let baseArr = str.split(' ');

    // Iterasi melalui setiap elemen array
    for (let i = 0; i < baseArr.length; i++) {
        let hasil = baseArr[i];

        // Mendapatkan angka dari awal string
        let angka = parseInt(hasil);

        // Menghapus angka dari string
        let string = hasil.replace(/^\d+/, '');

        // Menghitung panjang string
        let strLeng = string.length;

        if (strLeng >= 2) {
            // Memisahkan karakter pertama, terakhir, dan tengah
            let awal = string[0];
            let akhir = string[strLeng - 1];
            let tengah = string.slice(1, strLeng - 1);

            // Menggabungkan karakter berdasarkan urutan
            let chr = String.fromCharCode(angka);
            hasil = chr + akhir + tengah + awal;
        } else {
            hasil = String.fromCharCode(angka) + string;
        }

        // Mengganti elemen array dengan hasil
        baseArr[i] = hasil;
    }

    // Menggabungkan kembali array menjadi string
    return baseArr.join(' ');
}
let  str = '72olle 103doo 100ya';
console.log(decipherThis(str))