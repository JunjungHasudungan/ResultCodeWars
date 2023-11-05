<?php
/* soal:
    menjumlahkan nilai array, dengan kondisi:
    bila hasil penjumlahan array ganjil, tampilkan kembalian bertipe string  odd / ganjil
    bila hasil penjumlahan array genap, tampilkan kembalian bertipe string even / genap
     */

$arr = [1, 2, 3, 4]; // jumlah seluruh genap

function oddOrEven($a): string {
    $amount = array_sum($a); // menjumlahkan nilai array
    if($amount %= 2) {
        return "odd";
    }
    return "even";
}

echo oddOrEven($arr);