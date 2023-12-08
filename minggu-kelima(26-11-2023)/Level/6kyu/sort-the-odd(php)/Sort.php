<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Sort The Odd</title>
</head>
<body>
    <?php
        function sortArray(array $arr)  {
            // lakukan filter ganjil
            $odd = array_filter($arr, function($item){
                return $item & 2 != 0;
            });

            // sorting array ascending 
            sort($odd);
            // mengembalikan kedalam array baru dengan formasi baru berdasarkan nilai ganjil genap
            return array_map(function($item) use(&$odd) {
                if($item % 2 == 0) return $item;
                return array_shift($odd); 
            }, $arr);
        }

        $arr= [5, 8, 6, 3, 4];
        print_r(sortArray($arr));
    ?>
</body>
</html>