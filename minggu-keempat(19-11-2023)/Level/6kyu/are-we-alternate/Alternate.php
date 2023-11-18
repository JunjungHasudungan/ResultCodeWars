<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Are we alternate</title>
</head>
<body>
    <?php
        function isAlt($s){
            $arr_str = str_split($s);
            $vowels  = ['a', 'i', 'u', 'e', 'o'];


            for ($index = 0; $index < strlen($s) -1 ; $index++) { 
                if ((in_array($s[$index], $vowels) && in_array($s[$index + 1], $vowels))) {
                    return false;
                }
                elseif ((!in_array($s[$index], $vowels) && !in_array($s[$index + 1], $vowels))) {
                    return false;
                }
            }
            return true;
        }
        $s = "banana";
        echo isAlt($s);

    ?>
    <script src="areWe.js"></script>
</body>
</html>

