<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Alfabet Simetri</title>
</head>
<body>
    <?php
        function solve($arr) {
            $range = (range('a', 'z')); // mengembalikan array berjumlah 26 elemen
            $result = [];
            foreach ($arr as $value) { // mengeluarkan isi element dalam array
                // strlen($value) => 5(element-1), 3(element-2), 4(element-3) berdasarkan element yang keluar
                /* $range[$i] =>
                    element-1 (abcde), => 5 buah jumlah element
                    element-2 (abc) => 3 buah jumlah element
                    element-3 (abcd) => 4 buah jumlah element

                 $value[$i] => 
                    element-1 (abode) => 5 buah jumlah elemen
                    element-2 (ABc) => 3 buah jumlah elemen
                    elemen-3 (xyzD) => 4 buah jumlah elemen
                 */
                $counter = 0;
                for($i = 0; $i < strlen($value); $i++) {  
                    if(strtolower($value[$i]) === strtolower($range[$i])) {
                        $counter++;
                    }
                }
                 /* masukkan kedalam array yang tersedia dan hasil nilai counter 
                 yang telah dikeluarkan dengan proses disamakan nilai kedua array */
                array_push($result, $counter); 
            }
            return $result;
          }

          $arr = ["abode","ABc","xyzD"];
        solve($arr);
    ?>
    <script src="alfa.js"></script>
</body>
</html>