<?php
function distinctDigitYear($year) {
    // your code here
    $res = $year;
    do {
      $res++;
    } while (implode('', array_unique(str_split((string) $res))) != $res);
    return $res;
  }

  $year = 1123;
  distinctDigitYear($year);