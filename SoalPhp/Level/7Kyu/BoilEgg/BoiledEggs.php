<?php
/* SOAL: 7 Kyu
    
 */
function cooking_time(int $eggs) : int {
    $time_per_egg = 5;  // Waktu yang dibutuhkan untuk merebus satu telur dalam menit
    // $time_total = ceil($eggs / 8) * $time_per_egg;  // Menghitung waktu total berdasarkan aturan (8 telur maksimal per panci)
    
    return $time_total = ceil($eggs / 8) *5; 
  }
  
  cooking_time(4);