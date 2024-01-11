<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 7Kyu Roman Numerals Decoder</title>
</head>
<body>
    <?php
        function solution ($roman) {
            $romanNumbers = [
                'I' => 1,
                'V' => 5,
                'X' => 10,
                'L' => 50,
                'C' => 100,
                'D' => 500,
                'M' => 1000
            ];

            $number = 0;
            for ($i = 0; $i < strlen($roman); $i++) { // melakukan load / looping sebanyak ukuran str
                $currentVal = $romanNumbers[$roman[$i]]; // memasukkan nilai kedalam array
                $nextVal = isset($roman[$i + 1]) ? $romanNumbers[$roman[$i + 1]] : 0;
        
                if ($nextVal > $currentVal) {
                    $number -= $currentVal;
                } else {
                    $number += $currentVal;
                }
            }
        
            return $number;
          }

          $roman = 'MMXVII'; // ukuran nya 6 
          echo solution($roman);
    ?>

    <script src="number.js"></script>
</body>
</html>