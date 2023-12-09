<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 7Kyu Easy Line</title>
</head>
<body>
    <?php
        function easyline($n) : int {
            for ($sum = 1, $i = 1; $i <= $n; $i++) {
                $sum *= ($n + $i) / $i;
            }

        return round(log($sum));
        }

      $n = 7;
    echo easyline($n);
    ?>

    

    <script src="line.js"></script>
</body>
</html>