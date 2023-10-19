<?php
/* 
    soal 7 kyu:
    mengambil nilai array yang bersifat binner 
    dan konversi kedalam  kedalam tipe integer
 */
$arr = [0,1,1,0];

function binaryArrayToNumber($arr): int {
 
    $tem = implode($arr); // implode mengambil nilai array dan menjadikan kedalam string
    $decimal_number = bindec($tem); // Konversi biner ke desimal
    return $decimal_number; 
}

binaryArrayToNumber($arr);