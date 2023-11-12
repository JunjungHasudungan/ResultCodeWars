<?php

/* Soal:
    1. N dapat dibagi habis oleh pembagi (divisor).
    2. N kurang dari atau sama dengan batasan (bound).
    3. N lebih besar dari 0.
  */
function maxMultiple($divisor, $bound) {
    return $bound - ($bound % $divisor);
  }
  
  maxMultiple(divisor:2, bound: 7);