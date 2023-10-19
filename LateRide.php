<?php
/* 
    SOAL: 7 KYU
    mengihutng berapa lama dalam berkerndara 
 */
function late_ride(int $n): int {
    //  $n sebagai parameter penampung nilai input jumlah menit 
    $base_time = 60; // angka dasar waktu
    $temp_hour = $n / $base_time; // waktu jam sementara
    $temp_minute = $n % $base_time; // waktu menit sementara
    $limit = $base_time * 24; // batas waktu berkendara diatas 1 hari

    if($n < $limit) { // memberikan batas waktu 24 jam 
        $minute_a = floor($temp_minute / 10);  // mengubah, membulatkan dan memisahkan nilai menit
        $minute_b = floor($temp_minute % 10);
    
        $hour_a = floor($temp_hour / 10); // mengubah, membulatkan dan memisahkan nilai jam
        $hour_b = floor($temp_hour % 10);
    }
    return $result = $minute_a + $minute_b + $hour_a + $hour_b; // mengembalikan hasil penjumlahan bertipe integer
}

  late_ride(808);