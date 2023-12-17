<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 7Kyu Currying Function</title>
</head>
<body>
    <?php
    function multiply_all($arr){
        $number = 2;
        return function ($number)use($arr){
            $result = [];
            for ($i=0; $i < count($arr); $i++) { 
              $result[] = $arr[$i] * $number;
            }
            return $result;
        };
      }
      $arr = [1, 2, 3];
      var_dump(multiply_all($arr));
    ?>

    <script src="function.js"></script>
</body>
</html>