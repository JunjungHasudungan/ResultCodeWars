<?php

$year = 1001;


function nextHappyYear($year) {
    for ($year = $year + 1; $year <= 9000; $year++) { // Mulai dari tahun berikutnya hingga batas atas maksimal (9000).
        if (count(array_unique(str_split($year))) === 4) {
            return $year;
        }
    }
  }

nextHappyYear($year);
