<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 6 Kyu Count Duplicate</title>
</head>
<body>
    <?php
        function duplicateCount($text) {
            $charCount = [];
            $duplicate = 0;
            
            for ($i=0; $i < strlen($text); $i++) { 
               $string = strtolower($text[$i]);

               if (isset($charCount[$string])) {
                $charCount[$string]++;
               }else {
                $charCount[$string] = 1;
               }
            }

            foreach ($charCount as $key => $value) {
                if ($value > 1) {
                    $duplicate++;
                }
            }

            return $duplicate;
          }
        $text = "Indivisibilities";
        echo duplicateCount($text); 
    ?>
    <script src="displayDuplicate.js"></script>
</body>
</html>