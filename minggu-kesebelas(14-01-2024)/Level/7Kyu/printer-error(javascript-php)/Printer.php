<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 7kyu Printer ERROR</title>
</head>
<body>
    <?php
        function printerError($s) {
            $rangeChar = range('a', 'm');  // memberikan jarak / range dari a s/d m berbentuk array
            // melakukan filter value string berdasarkan value range dan 
            // mengembalikan / mengantikan nilai dari sisa dari filter
            // dan value string dihitung
            $errorCount = strlen(str_replace($rangeChar,'',$s)); // xyywwwww
            return $errorCount . '/' . strlen($s);  // mengembalikan hasil dengan format contoh: "8/22"
        }

        $s = 'aaaxbbbbyyhwawiwjjjwwm';
        printerError($s);
    ?>

    <script src="error.js"></script>
</body>
</html>