<?php
// 7 kyu
/* Soal:
    Pindahkan / hilangkan list array yang duplikat
    dan juga menjaga nilai list item array yang dibelakang tetap dibelakang
 */

$arr = [3, 4, 4, 3, 6, 3]; // angka terakhir harus tetap dibelakang
// hasil yang diharapkan -> [4, 6, 3]

function solve($arr) :array{

    // [3, 4, 4, 3, 6, 3]  awal list item array
    $reverse_1 = array_reverse($arr);  // Array ( [0] => 3 [1] => 6 [2] => 3 [3] => 4 [4] => 4 [5] => 3 )

    // melakukan array reverse  untuk memutar posisi list item array
    $arr_un = array_unique($reverse_1); // Array ( [0] => 3 [1] => 6 [3] => 4 )

    // melakukan reverse kembali list item array
    $result = array_reverse($arr_un);  // Array ( [0] => 4 [1] => 6 [2] => 3 ) 

    return array_reverse(array_unique(array_reverse($arr))); // dapat dilakukan dalam 1 line
  }

  solve($arr);