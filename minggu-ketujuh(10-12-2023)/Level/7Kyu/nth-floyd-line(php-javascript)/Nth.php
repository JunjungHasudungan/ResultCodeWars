<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 7Kyu Nth Floyd Line</title>
</head>
<body>
    <?php
        function nth_floyd($n) {
            $total = 0;
            $line = 0;

            while($total < $n) {
                $line++;
                $total += $line;
            }
            return $line;
        }
        
        $n = 15;

        echo nth_floyd($n);
    ?>

    <script src="line.js"></script>
</body>
</html>