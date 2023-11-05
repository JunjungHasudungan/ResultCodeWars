<?php

function compare($s1, $s2){
  $s1 = ctype_alpha($s1) ? $s1 : "";  // pengecekan inputan apakah string atau tidak
    $s2 = ctype_alpha($s1) ? $s2 : "";
	
  // str_split untuk membuat jadi $s1 menjadi arr
  // arr_map untuk mentransform kedalam biner / ord dan mengembalikan berbentuk array
  // array_sum melakukan penjumlahan array
  // == mengembalikan hasil penjumlahan array sama dengan array yang lain   
	return array_sum(array_map('ord', str_split($s1))) == array_sum(array_map('ord', str_split($s2)));    // return array_sum(array_map('ord', str_split($s1))) == array_map('ord', str_split($s2));
    // array_map()
    // for ($index = 0; $index < count(str_split($s1)) ; $index++) { 
    // echo ord($s1[$index]);
    // }

    // $s1 = ctype_alpha($s1) ? strtoupper($s1) : "";
	// $s2 = ctype_alpha($s2) ? strtoupper($s2) : "";
	
	// return array_sum(array_map('ord', str_split($s1))) == array_sum(array_map('ord', str_split($s2)));
}

function getResult() {

    // $s1 = ctype_alpha($s1) ? strtoupper($s1) : "";
    // $s2 = ctype_alpha($s2) ? strtoupper($s2) : "";
    
    // $s1_sum = 0;
    // for ($i = 0; $i < strlen($s1); $i++) {
    //   $s1_sum += ord($s1[$i]);
    // }
    
    // $s2_sum = 0;
    // for ($i = 0; $i < strlen($s2); $i++) {
    //   $s2_sum += ord($s2[$i]);
    // }
    
    // return $s1_sum == $s2_sum;
    // $s1 = ctype_alpha($s1) ? $s1 : '';
    // $s2 = ctype_alpha($s2) ? $s2 : '';

    // $sum1 = array_sum(array_map('ord', str_split(strtoupper($s1))));
    // $sum2 = array_sum(array_map('ord', str_split(strtoupper($s2))));


    // $s1 = ctype_alpha($s1) ? strtoupper($s1) : "";
	// $s2 = ctype_alpha($s2) ? strtoupper($s2) : "";
	
	// return array_sum(array_map('ord', str_split($s1))) == array_sum(array_map('ord', str_split($s2)));
}

$s1 = 'AB';
$s2 = 'BC';
compare($s1, $s2);
