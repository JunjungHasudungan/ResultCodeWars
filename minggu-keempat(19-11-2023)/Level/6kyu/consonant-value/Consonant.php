<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Consonant value</title>
</head>
<body>
    <?php
    function solve($s) {
        $result = 0;
        $counter = 0;
        for ($i=0; $i < strlen($s); $i++) { 
            // strpos($mystring, $findme) mencari letak posisi string
            if(strpos("aeiou", $s[$i]) === false) {
                // ord($caracter); Convert the first byte of a string to a value between 0 and 255
                $consonan = ord($s[$i]) - 96; // 96 adalah hasil dari nilai ASCII(97) -1 
                $result += $consonan; // 26, 4 3, 22
            }else {
                $result = 0;
            }
            if ($result > $counter) {
                $counter = $result;
            }
        }
        return $counter;
    }

    echo solve("zodiacs");
    ?>
    <script src="consonant-value.js"></script>
</body>
</html>