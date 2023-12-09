<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 7Kyu Sum Strings</title>
</head>
<body>
    <?php
        function sum_of_integers_in_string(string $s) {
           $total = 0;
           $current_number = 0;

            for ($i=0; $i < strlen($s); $i++) { 
                if (is_numeric($s[$i])) { 
                    $current_number = $current_number * 10 + intval($s[$i]);
                } else {
                    $total += $current_number;
                    $current_number = 0;
                }
            }
            return $total += $current_number;
        }

        $s = "The30quick20brown10f0x1203jumps914ov3r1349the102l4zy dog";
        echo sum_of_integers_in_string($s);
    ?>
    <script src="strings.js"></script>
</body>
</html>