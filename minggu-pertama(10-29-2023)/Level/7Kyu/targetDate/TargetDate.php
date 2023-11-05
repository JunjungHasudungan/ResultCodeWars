<?php

// contoh soal:
$a0 = 4281; //jumlah uang awal
$p= 5087; // suku bunga dalam persen yang diberikan per tahun
$a = 2; //  jumlah uang yang ingin dicapai dengan menabung di bank
$amountDayOfYear = 36000;


function dateNbDays($a0, $a, $p) {

    for ($day = 0; $a0 < $a; $day++) { 
        $a0 += $p / 36000 * $a0;
    }

    $date = new DateTime('2016-01-01');
    $date->add(new DateInterval("P{$day}D"));

    return $date->format("Y-m-d");
  }

dateNbDays($a0, $a, $p);