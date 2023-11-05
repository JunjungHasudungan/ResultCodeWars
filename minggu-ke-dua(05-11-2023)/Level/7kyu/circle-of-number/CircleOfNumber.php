<?php
function circle_of_numbers(int $n, int $first_number): int {
    // Coding and coding ... 
    return ($first_number + ($n / 2)) % $n;
  }

  $n = 10;
  $first_number = 2;
circle_of_numbers($n, $first_number);