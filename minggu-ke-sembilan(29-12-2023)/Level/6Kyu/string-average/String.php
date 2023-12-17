<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 6 Kyu String average</title>
</head>
<body>
    <?php
function average_string(string $s)
{
    $temp = 0;
    $words = explode(' ', $s);
    $values = [
        'zero'  => 0,
        'one'   => 1,
        'two'   => 2,
        'three' => 3,
        'four'  => 4,
        'five'  => 5,
        'six'   => 6,
        'seven' => 7,
        'eight' => 8,
        'nine'  => 9,
    ];
    
    if (empty($s)) {
        return 'n/a';
    }
    
    foreach ($words as $word) {
        if (!isset($values[$word])) {
            return 'n/a';
        }
        $temp += $values[$word];
    }
    $avg = floor($temp / count($words));
    return array_search($avg, $values);
}
    $s = "zero nine five two";
    echo average_string($s);
    ?>
    <script src="average.js"></script>
</body>
</html>