<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Growth in population</title>
</head>
<body>
    <?php
        function nbYear($p0, $percent, $aug, $p) {
            // your code
            for ($tahun=0; $p0 < $p; $tahun++) { 
                $p0 = $p0 + (int) ($p0 * $percent / 100 + $aug);
            }

            return $tahun;
        }

        echo nbYear(1500, 5, 100, 5000);
    ?>

    <script src="population.js"></script>
</body>
</html>