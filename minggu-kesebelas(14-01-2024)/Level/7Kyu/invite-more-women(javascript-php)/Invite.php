<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 7Kyu invite-more-women</title>
</head>
<body>
    <?php
        function invite_more_women(array $a): bool {
            return (array_sum($a) > 0);
        }
    
        $a = [1, -1, 1];
        
        echo invite_more_women($a);
    ?>
    <script src="more.js"></script>
</body>
</html>