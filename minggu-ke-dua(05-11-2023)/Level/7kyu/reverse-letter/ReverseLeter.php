<?php
//  menggunakan preg_replace untuk memberi pola, dan mengganti 
// mengunakan strrev untuk melakukan reverse input
function reverseLetter($str){
    $res = ''; // menampung perubahan 
    // ^ mengartikan awal dari baris input, a-zA-Z inputan karkter 
    // a-zA-Z mengartikan karakter alpabet dari a-z lowercase atau uppercase
    $patern = '/[^a-zA-Z]/'; 
    // return strrev(preg_replace($patern, $res, $str)); // atau cara membuat lebih ringkas
    return strrev(preg_replace('/[^a-zA-Z]/', '', $str));
   
}

$str = "123FDG34";
reverseLetter($str);