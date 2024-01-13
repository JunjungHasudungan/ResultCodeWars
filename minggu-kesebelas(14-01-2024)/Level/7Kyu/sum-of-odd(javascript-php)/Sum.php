<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7Kyu Sum of odd</title>
</head>
<body>
    <?php
        function cube_odd($a) {
            $result = 0; // penampung hasil
            for ($i=0; $i < count($a); $i++) {  // looping sebanyak item dari array
                if (!is_numeric($a[$i])) { // cek tipe data seluruh item dari array
                    return null; // kembalikan null
                }

                if($a[$i] & 1) { // cek nilai item array bila bernilai ganjil
                    $result += ($a[$i] ** 3); // masukkan nilai pada item yang dipangkatkan 3
                }
            }
            return $result; // kembalikan hasil
        }
        $a = [1, 2, 3, 4];
        echo cube_odd($a);
    ?>

    <script src="odd.js"></script>
</body>
</html>