<?php
// menghasil kan ouput YYYY-MM-DD 
// mecari jumlah hari menggnakan log(untuk) dan ceil(untuk membulatkan)
function dateNbDays($a0, $a, $p) {
    // $start_date_depo = '2016-01-01'; 
    // $amount_day = ceil(log($a / $a0) / log(1 + ($p / 36000)));
    // return  date("Y-m-d", strtotime($start_date_depo . '+'. $amount_day . 'days')); 
    return date("Y-m-d", strtotime('2016-01-01 +'.ceil(log($a / $a0) / log(1 + ($p / 36000))) . 'days')); 
  }

  $a0 = 4281; // jumlah uang(AWAL) yang disetor / deposit
  $a = 5087; // jumlah uang yang ingin dicapai
  $p = 2; // suku bunga perhari / dalam 1 tahun
  dateNbDays($a0, $a, $p);