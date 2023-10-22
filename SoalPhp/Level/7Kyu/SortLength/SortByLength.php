<?php

$arrStr = ["Beg", "Life", "I", "To"]; // contoh nilai array

function sortByLength($toSort): array { // :array akan mengembalikan array
    $arrTemp = []; // tempat penampung array sementara
   foreach ($toSort as $key => $value) {  // $key sebagai index
        $arrTemp[$key] = strlen($value); // strlen($value) mengukur karakter dan masukkan kedalam penampun
   }
    asort($arrTemp); // mengurutkan angka array paling kecil
    $hasil = []; 
    foreach ($arrTemp as $key => $value) {
        $hasil[] = $toSort[$key];
    }
   return $hasil;
  };

  sortByLength($arrStr);