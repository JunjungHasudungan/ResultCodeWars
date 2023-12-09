<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 7kyu Disemvowel Trolls</title>
</head>
<body>
    <?php
        function disemvowel($string) {
            $result = "";

            for ($i=0; $i <strlen($string); $i++) { 
                if (strpos("aeiueo",  strtolower($string[$i])) === false) {
                    $result .= $string[$i];
                }
            }
            return $result;
        }

        $string = "This website is for losers LOL!";
        echo disemvowel($string);
    ?>
    <script src="trolls.js"></script>
</body>
</html>