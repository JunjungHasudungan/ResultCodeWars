<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Small Enought Soal 7 Kyu</title>
</head>
<body>
    <?php
    function smallEnough($a, $limit) {
      return max($a) <= $limit;
    }
    $a = [66, 101];
    $limit = 200;
        echo smallEnough($a, $limit);
    ?>
    <script src="enough.js"></script>
</body>
</html>