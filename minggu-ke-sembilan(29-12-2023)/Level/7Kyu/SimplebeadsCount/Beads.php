<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 7Kyu Simpple BeadsCount</title>
</head>
<body>
    <?php
    function count_red_beads(int $n) {
        return $n === 0 ? 0 : ($n - 1) * 2;
    }

    echo count_red_beads(3);
    ?>
    <script src="count.js"></script>
</body>
</html>