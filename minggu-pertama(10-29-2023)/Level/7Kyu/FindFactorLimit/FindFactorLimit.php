<?php
/* 
    Soal: 
    Mengembalikan nilai berbentuk array yang nilainya dari faktor bilangan
    dan memberikan limit atau batasan awal nilai faktor yang akan dikembalikan
*/

/*  contoh integer

    integer = 12 -> 1, 2, 3, 4, 6, dan 12
    limit = 2 -> 2, 3, 4, 6, 12 

    ekspetasi -> 2, 3, 4, 6, 12

    integer = 30 ->  1, 2, 3, 5, 6, 10, 15, 30.
    limit 2 ->  2, 3, 5, 6, 10, 15, 30.
    ekspetasi -> 2, 3, 5, 6, 10, 15, 30
    
*/

function factors($integer, $limit): array {
    $arr = []; // deklarasikan array untuk menampung faktor bilangan yang dapat membagi nilai dari integer
    for($index = $limit; $index <= $integer; $index++ ) {
        if ($integer % $index === 0) { // jika angka inputan sisa bagi dari limit sisa 0 atau tidak ada sisa
            $arr[] = $index; // nilai yang sudah dibagi dimasukkan kedalam array 
        }
    } 
    return $arr;
}

factors(30, 2);