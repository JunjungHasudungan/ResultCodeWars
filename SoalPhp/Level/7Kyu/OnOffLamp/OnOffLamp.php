<?php

function lamps(array $a) {
    $numb = $numb2 = 0;

    foreach ($a as $key => $value) {
        if ($key % 2 == $value) {
            return $numb++;
        } else {
            return $numb2++;
        }
        return min($numb, $numb2);
    }
  }

  $arr = [1, 0, 0, 1, 0, 1, 0, 0, 1, 0, 1]; // dikembalikan nilai integer bernilai 6  
  lamps($arr);