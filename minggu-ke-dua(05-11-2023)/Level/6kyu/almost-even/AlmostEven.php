<?php

/*  menggunakan intdiv(untuk membagikan numb1, numb2) 
    melakukan mod untuk mengembalikan hasil sisa bagi
    menggunakan array_fill(untuk mengisi nilai element dari awal, jumlah angka, dan mengembalikan 
    berbentuk array )
*/

function split_integer(int $num, int $parts) {
    $res_int = intdiv($num, $parts); // 3
    $mod_numbs =  $num % $parts; // 2
    return array_fill(0, $parts - $mod_numbs, $res_int) + array_fill($parts - $mod_numbs, $mod_numbs, $res_int + 1);
  }

  $num = 20;
  $parts = 6;
  split_integer($num, $parts);