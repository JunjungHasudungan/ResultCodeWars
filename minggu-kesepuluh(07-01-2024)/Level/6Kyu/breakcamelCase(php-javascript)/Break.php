<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 6Kyu Break camelCase</title>
</head>
<body>
    <?php
        function solution($string) {
            $result = ""; // variable penampung hasil
        
            for ($i=0; $i < strlen($string); $i++) {  // melakukan looping sebanyak jumlah string
              if ($i > 0 && $string[$i] === strtoupper($string[$i])) { // pengecekan dan lakukan Uppercase
               $result .= " "; // memberikan nilai kosong berbentuk spasi kedalam variable penampung
              }
              $result .= $string[$i]; // memasukkan nilai string kedalam variable penampung hasil
            }
            return $result; // mengembalikan hasil
        }

        $string = 'camelCasing';
        echo solution($string);
    ?>

    <script src="camelcase.js"></script>
</body>
</html>