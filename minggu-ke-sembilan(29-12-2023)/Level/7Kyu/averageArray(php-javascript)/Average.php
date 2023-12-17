<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 7Kyu Average array</title>
</head>
<body>
    <?php
        function avgArray($arr) {
            $result = []; // var collect result array
            // make looping on two steps
            for ($i=0; $i < count($arr[0]); $i++) { // looping index 0 on array nested
                $arrTemp = [];
                for ($j=0; $j < count($arr); $j++) { // looing all value an array
                    $arrTemp[] =  $arr[$j][$i];
                }
                $result[] = array_sum($arrTemp) / count($arr);
            }
            return $result;
          }

        $arr = [ [1, 2, 3, 4], [5, 6, 7, 8] ];
        var_dump(avgArray($arr));
    ?>
    <script src="array.js"></script>
</body>
</html>