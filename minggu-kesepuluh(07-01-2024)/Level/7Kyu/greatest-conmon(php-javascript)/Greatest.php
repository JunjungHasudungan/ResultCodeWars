<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function mygcd($x, $y) {
    while ($y != 0) {
        $sisa = $x % $y;
        $x = $y;
        $y = $sisa;
    }
    return $x;
}

// Contoh penggunaan
$x = 60;
$y = 12;
echo mygcd($x, $y);
    ?>

    <script src="common.js"></script>
</body>
</html>