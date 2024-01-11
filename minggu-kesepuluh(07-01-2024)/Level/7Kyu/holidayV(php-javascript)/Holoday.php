<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 7Kyu Holiday V - SeaSick Snorkelling</title>
</head>
<body>
    <?php
        function sea_sick(string $s) {
            return substr_count($s,'_~')+substr_count($s,'~_')>strlen($s)/5?'Throw Up':'No Problem';
          } 

          $s = '';
          echo sea_sick($s);
    ?>

    <script src="Snorkelling.js"></script>
</body>
</html>