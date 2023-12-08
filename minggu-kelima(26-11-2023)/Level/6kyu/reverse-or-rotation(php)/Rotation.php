<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Reverse or Rotation</title>
</head>
<body>
    <?php

        function revRot($s, $sz) {
            $result = '';
            // validasi inputan
            if ($sz <= 0 || !$s || $sz >= strlen($s)) {
                return "";
            }
            $chunkCount = floor(strlen($s) / $sz); // melakukan transformasi nilai string kebentuk array
            for ($i = 0; $i < $chunkCount; $i++) {
                $chunk = substr($s, $i * $sz, $sz);
        
                if (array_sum(str_split($chunk)) % 2 == 0) {
                    $result .= strrev($chunk);
                } else {
                    $result .= substr($chunk . $chunk[0], 1);
                }
            }
        
            return $result;
        }

        $s = "123456779";
        $sz = 8;

        echo revRot($s, $sz);
    ?>

    <script src="reverses.js"></script>
</body>
</html>