<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 6 Kyu Play with Digits</title>
</head>
<body>
    <?php 
        function digPow($n, $p) {
            $digits = array_map('intval', str_split($n));
            $currentSum = 0;
            foreach (range($p, $p + count($digits) - 1) as $i => $index) {
                $currentSum += pow($digits[$i], $index);
            }
            if ($currentSum % $n === 0) {
                return $currentSum / $n;
            } else {
                return -1;
            }
        }

        $n = 92;
        $p = 1;

        echo digPow($n, $p);
    ?>
    <script src="digits.js"></script>
</body>
</html>