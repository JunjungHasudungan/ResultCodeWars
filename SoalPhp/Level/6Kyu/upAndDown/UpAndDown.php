<?php

$string = "be after arrived two My so";

function arrange($strng): string {
    $arrStr = explode(" ", $strng); // membentuk kalimat menjadi 1 array
    $genap = true; // sebagagi acuan dasar untuk kondisi genap atau tidak nilai panjang array

    // mengeluarkan isi dari array berdasrkan jumlah karakter dari $arrStr
    for ($i=0; $i < count($arrStr) - 1; $i++) { //mengurangi jumlah 1 kalimat dalam array
        $kiri = $arrStr[$i]; // mengurangi karakter yang kiri
        $kanan = $arrStr[$i + 1]; //memotong karakter yang kanan
        
        if (!$genap && strlen($kiri) < strlen($kanan)|| $genap && strlen($kiri) > strlen($kanan)) {
            $arrStr[$i + 1] = $kiri; // menambah 1 kata kesebelah kiri
            $arrStr[$i] = $kanan; // mengurangi kata sebelah kanan
        }

    $genap = !$genap;
    }

    // mengeluarkan isi dalam array $arrStr
    foreach ($arrStr as $key => $value) {
        // melakukan sisa bagi 2 jika mengembalikan nilai true, lakukan UPPERCASE
        // jika mengembalikan nilai false, lakukan lowercase
        $arrStr[$key] = $key % 2 ? strtoupper($value) : strtolower($value);
    }

    // mengembalikan format array $arrStr kedalam format kalimat biasa kedalam string
    return implode("", $arrStr);
}

arrange($string);