<?php

$arr = [2, 3, 4, 5, 6]; // contoh pertama
function isCircleSorted($arr): bool {
    $jumlah_arr = count($arr); // menghitung jumlah angka [5] dalam array 
    $index_awal = 0; // acuan dasar index
    $isCircleSorted = false;

    // mengeluarkan semua nilai array
    for ($index = 0; $index < $jumlah_arr; $index++) {  // arr[$i] = 2, 3, 4, 5, 6
    
        // $arr[$index + 1] => 3, 4, 5, 6 namun key index ke 5 tidak ada karna sudah $index dimulai dari 1
        if( $arr[$index] > $arr[ ($index + 1) % $jumlah_arr] ){
            $index_awal++; // mengembalikan nilai 1
        }
        if($index_awal > 1) {
            return $isCircleSorted;
        }   
    }
    return !$isCircleSorted;
}

isCircleSorted($arr);