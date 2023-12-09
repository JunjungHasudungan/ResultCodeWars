<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 6 kyu Split Strings</title>
</head>
<body>
    <?php
        function solution($str) {
            $result = [];

            for ($i = 0; $i < strlen($str); $i += 2) {
                $pair = substr($str, $i, 2);
                if (strlen($pair) === 1) {
                    $pair .= '_';
                }
                $result[] = $pair;
            }
            return $result;
        }
        $str = "abc";
         var_dump(solution($str));
    ?>

    <script src="strings.js"></script>
</body>
</html>