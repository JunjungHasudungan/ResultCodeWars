<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Section array sort</title>
</head>
<body>
    <?php

        function sect_sort($array, $start, $length = NULL)
        {
            $length = is_null($length) ? count($array) - $start : $length;
            $arr = array_slice($array, $start, $length);
            sort($arr);
            array_splice($array, $start, $length, $arr);
            return $array;
        }

        var_dump(sect_sort([1, 2, 5, 7, 4, 6, 3, 9, 8], 2));
    ?>

    <script src="arraySort.js"></script>
</body>
</html>