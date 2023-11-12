<?php
/* 
    Soal: (Apakah nilai element string dalam arrray benar termasuk dari bagian value parameter string)
    1.  string kosong nilai kembali true
    2. setiap element array tidak mengandung unsur dari string kembalikan false
 */

function containAllRots($str, $arr) {
    // your code
    // if(empty($str)) {
    //     return true;
    // }
      // lakukan iterasi berdasarkan jumlah string untuk mengeluarkan value dari string
    for( $index = 0; $index < strlen($str); $index++) { 
        // gunakan substr untuk mengembalikan bagian dari value string 
        // berdasarkan jumlah iterasi dari jumlah value string
        $rotasi = substr($str, $index) . substr($str, 0, $index);  // bsjq, sjqb,jqbs,qbsj
        // meggunakan in_array untuk mengecek bagian dari elemen rotasi eksis dengan element arr
        if(!in_array($rotasi, $arr)){
            return false;   
        }
    }
    return true;
}
containAllRots(str:"bsjq", arr: ["bsjq", "qbsj", "sjqb", "twZNsslC", "jqbs"]);
