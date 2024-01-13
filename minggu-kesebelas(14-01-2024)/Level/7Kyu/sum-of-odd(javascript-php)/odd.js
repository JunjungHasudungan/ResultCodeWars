function cubeOdd(arr) {
    // penampung hasil
    let result = 0; 

    // lakukan looping sebanyak jumlah item array
    for (let index = 0; index < arr.length; index++) { 

        // cek tipe data item pada array jika tidak sebuah number
        if (isNaN(arr[index])) { 

            return undefined; // kembalikan null
        }
        // cek nilai item dari array yang bersifat ganjil menggunakan & atau (Bitwise)
        if (arr[index] & 1) { 
            
            // masukkan nilai seluruh item yang sudah dilakukan pangkat 3
            result += arr[index] ** 3;
        }
    }

    // kembalikan hasil
    return result;
}

let arr = [1, 2, 3, 4];
console.log(cubeOdd(arr))