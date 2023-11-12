<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find the odd int</title>
</head>

    <body>
        <?php
            function findIt(array $seq): int{
                // $arr  = array_count_values($seq); // 1(2), 2(1)
                foreach (array_count_values($seq) as $key => $value) {
                    if ($value % 2 == 1) {
                        return $key;
                    }
                }
            }

            $seq = [1, 1, 2];
            echo findIt($seq);
        ?>

        <script src="findOdd.js"></script>
    </body>
</html>