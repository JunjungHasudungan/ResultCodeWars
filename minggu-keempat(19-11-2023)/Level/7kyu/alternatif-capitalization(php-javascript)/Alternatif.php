<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Alternative Capitalization</title>
</head>
<body>
    <?php
        function capitalize($s) {
            $uppercase = ""; // penampung hasil perubahan uppercase
            $lowercase = ""; // penampung hasil perubahan lowercase

            // iterasi berdasarkan jumlah ukuran string
            for ($index = 0; $index < strlen($s); $index++) {   
                // lakukan sisa bagi dan validasi kondisi menggunakan operator tenari
                $uppercase .= $index %2 ? strtolower($s[$index]) : strtoupper($s[$index]);
                $lowercase .= $index % 2 ? strtoupper($s[$index]) : strtolower($s[$index]); 
            }

            // mengembalkan hasil perubahan berbentuk array
            return [$uppercase, $lowercase];
        }

        $s = "abcdef";
        print_r(capitalize($s));
    ?>

    <script src="alternativeCapitalization.js"></script>
</body>
</html>