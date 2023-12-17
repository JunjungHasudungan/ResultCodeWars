<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 6kyu Count the Smiley faces</title>
</head>
<body>
    <?php
    function count_smileys($arr) {
        $countFaces = 0;
        foreach ($arr as $value) {
          if (
            (strlen($value) === 2 || strlen($value) === 3) &&
            ($value[0] === ':' || $value[0] === ';') &&
            ($value[strlen($value) - 1] === ')' || $value[strlen($value) - 1] === 'D') &&
            (strlen($value) === 2 || (strlen($value) === 3 && ($value[1] === '-' || $value[1] === '~')))
          ) {
           $countFaces++;
          }
        }
      return $countFaces;
    }

    // $arr = [];
    $arr = [':D',':~)',';~D',':)'];

    echo count_smileys($arr);
    
     ?>
    <script src="smile.js"></script>
</body>
</html>