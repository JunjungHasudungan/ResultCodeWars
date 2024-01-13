<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6Kyu Pair Of Gloves</title>
</head>
<body>
    <?php
        function numberOfPairs($gloves) {
            $result = 0; // penampung hasil
            $countItem = array_count_values($gloves); // menghitung value item yang sama
            foreach($countItem as $item) { // lakukan looping
                $result += intdiv($item, 2); // memasukkan hasil nilai yang telah dibagi 2
            } 
            return $result; // kembalikan hasil
        }

        $gloves = ["red", "green", "red", "blue", "blue"];
        numberOfPairs($gloves);
    ?>

    <script src="glove.js"></script>
</body>
</html>