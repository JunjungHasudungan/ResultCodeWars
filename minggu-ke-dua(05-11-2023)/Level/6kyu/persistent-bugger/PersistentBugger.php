<?php
//  
function persistence($numb) {
// menggunakan str_split(agar inputan $numb diubah dan mengembalikan array)
// menggunakan array_product (untuk melakukan kalkulasi pada setiap element yang ada)
    // print_r(array_product(str_split($numb)));
    return $numb > 9 ? persistence(array_product(str_split($numb))) + 1 : 0;
}

$numb = 39;
persistence($numb);


