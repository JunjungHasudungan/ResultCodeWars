<?php
/* Soal 7 Kyu
    menampilkan huruf tengah dengan kondisi
    kalau ukuran huruf itu jumlah ganjil tampilkan 1 karakter yang ditengah huruf
    kalau ukuran huruf itu jumlah genap, tampilkan 2 karakter yang ditengah huruf
*/

// $word = "test"; // 4 karakter: yang diharapkan tampil karakter es
// $word = "middle"; // 6 karakter: yang diharapkan ditampikan harus dd
// $word = "testing"; // 7 karakter yang diharapkan ditampilkan huruf t
$word = "BTKtukRKu"; // 9 karakter: yang harus ditampilan u

function getMiddle($word){
     
    $c = strlen($word); // menghitung ukuran karakter string
    $index = (strlen($word) / 2) - 1; // untuk genap
    $index_odd = (strlen($word) - 1) / 2; // untuk ganjil

    if($c %= 2){
        echo substr($word, $index_odd, 1);
     }else {
     echo substr($word, $index, 2);
    }
  }
  getMiddle($word);