<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 7kyu digit inside</title>
</head>
<body>
    <?php
       function numbersWithDigitInside($x, $d) {
        $result = [];
        for($index=1; $index <= $x; $index++){
          if(false !== strpos((string)$index, (string)$d)){
              $result[]=$index;
          }
        }
          if(empty($result)){
            return [0,0,0];
          }
          return [count($result), array_sum($result), array_product($result)];
      }

       var_dump(numbersWithDigitInside(20, 2));

    ?>

<script src="inside.js"></script>
</body>
</html>