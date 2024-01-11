<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 7kyu Char Code Calculation</title>
</head>
<body>
    <?php
        function calc($s) {
            // $str_arr = str_split($s); // megubah value string menjadi array
            // mengkonversikan kedalam ASCII dan mengembalikan berbentuk array baru
            $charCodes = array_map('ord', str_split($s));

            // mengkonversikan array menjadi string 
            $total1 = implode('', $charCodes);  // 656667

            // menggantikan angka 7 dengan 1 yang muncul dari nilai string 
            $total2 = str_replace('7', '1', $total1); // 656661
            // $arr_total1 = str_split($total1); // mengubah kebentuk array
            // $arr_total2 = str_split($total1); // mengubah kebentuk array
            // menjumlahkan nilai pada array total1 dan 2 serta melakukan penjumlahan 
            // dan mengembalikan hasil pengurangan
            // return array_sum($arr_total1) - array_sum($arr_total2);

            // mengembalikan dengan bentuk array dengan key total1 & 2 serta 
            // mengubah kedalam bentuk int
            // echo array_sum(str_split($total1));
            return array_sum(str_split($total1)) - array_sum(str_split($total2));
          }

          $s = 'ABC';
        echo calc($s);
    ?>
    <script src="calculation.js"></script>
</body>
</html>