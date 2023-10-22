<?php
// should return an integer

$h = 40; // tinggi dari 
$d = 120; // the d of the cylinder
$vt = 3500; // the total volume


function tankvol($h, $d, $vt) {

    $sudut = acos(1 - $h / ($d / 2)) * 2; // mencari sudut dan menggunakan arc sin(panjang busur)
    return floor((0.5 * ($sudut - sin($sudut)) / pi()) * $vt); // mengembalikan nilai kedalam int dari nilai float
}    

tankvol($h, $d, $vt);
