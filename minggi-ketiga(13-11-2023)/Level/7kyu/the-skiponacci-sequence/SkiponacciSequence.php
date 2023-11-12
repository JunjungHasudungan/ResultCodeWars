<?php

function skiponacci($n)
{
    $arr = [];
    for ($i = 0; $i < $n; $i++) { // looping sebanyak jumlah n
        if ($i < 2) echo $arr[$i] = 1; // assign 1 bila $rr[$i] dibawah nilai 2
        else echo $arr[$i] = $arr[$i - 1] + $arr[$i - 2]; // other wise assin nilai dengan nemambakan nilai
    }

  foreach ($arr as $k => $v) { // iteraso berdasarkan jumlah array dan display index kedalam $k
    $a[] = $k % 2 == 0 ? $v : 'skip'; // jika nilai key sisa bagi 0 dimasukkan kedalam array, bila folse, maskkan kedalam array 
  }
    return implode(' ', $a);  // memacah array dan memberi spasi diantara nilai berdasarkan nlai array dari $a dan kembalikan
}

skiponacci(5);