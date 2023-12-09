<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 7Kyu String Scrumble</title>
</head>
<body>
    <?php
      function scramble($str, $arr) {
        $sortedChars = [];
        $charMap = array_combine($arr, str_split($str));
        ksort($charMap);
        $sortedChars = array_values($charMap);
        return implode('', $sortedChars);
    }

    $arr =  [4,0,3,1,5,2];
    $str = "sc301s";
    echo scramble($str, $arr); 
    
    ?>
    <script src="scrumble.js"></script>
</body>
</html>