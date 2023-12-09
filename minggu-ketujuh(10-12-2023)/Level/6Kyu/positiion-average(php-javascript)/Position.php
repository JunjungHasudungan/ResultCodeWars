<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 6Kyu Position Average</title>
</head>
<body>
    <?php
        function posAverage($s) {
            $str_arr = explode(', ', $s);  // merubah kedalam array dan menghilangkan koma diantara setiap element
            $numb_string = count($str_arr); // 10 -> jumlah seluruh elemen dalam array
            $str_leng =  strlen($str_arr[0]);   // 6 -> jumlah karakter dalam 1 elemen
            $post = 0;
            for ($i = 0; $i < $numb_string -1; $i++) { 
                for ($j = $i + 1; $j < $numb_string; $j++) { 
                    foreach (str_split($str_arr[$i]) as $key => $value) {
                        if ($value == $str_arr[$j][$key]) {
                            $post++;
                        }
                    }
                }
            }
            return sprintf('%.9f', $post / ($numb_string * ($numb_string - 1) /2 * $str_leng) * 100);
        }
    
        $s =  "444996, 699990, 666690, 096904, 600644, 640646, 606469, 409694, 666094, 606490";
        echo posAverage($s);
    ?>
    <script src="average.js"></script>
</body>
</html>