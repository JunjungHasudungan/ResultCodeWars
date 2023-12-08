<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3 Hoops Game</title>
</head>
<body>
    <?php
        // function prizeCounter($s) {
        //     $bonus = ['R' => 500, 'B' => 300, 'G' => 200];
        //     $streaks = ['R' => 0, 'G' => 0, 'B' => 0];
        
        //     $score = 0; $inactive = $last = '';
        //     foreach ($s as $h) {
        //     if ($h !== $inactive) $score += 100;
            
        //     if ($last && $last !== $h) $streaks[$last] = 0;
        
        //     $streaks[$h]++;
        
        //     if ($streaks[$h] === 3 && $h !== $inactive) {
        //         $score += $bonus[$h];
        //         $inactive = $h;
        //     }
        
        //     $last = $h;
        //     }
        
        //     return $score;
        // }
        function prizeCounter($s){
            $streak = ['R' => 500, 'B'=> 300, 'G'=> 200];
            $scoreAllStart = ['R' => 0, 'B'=> 0, 'G'=> 0];
            $score = 0; $active = $last = '';

            foreach ($s as $value) { // iterasi / mengeluarkan Nilai Elemen array
                if ($value !== $active) $score += 100; // memberi nilai 100 kesemua elemen array

                if ($last && $last !== $value) $scoreAllStart[$last] = 0;

                $scoreAllStart[$value]++; // melakukan perulangan berdasarkan angka urutan element
                
                // jika perulangan pada indeks ke 3
                if ($scoreAllStart[$value] === 3 && $value !== $active) { 
                    $score += $streak[$value]; // memberikan nilai bonus kepada index yang tidak koson
                    $active = $value; // memberikan indek yang bernilai sama degnan 3

                }

                $last = $value;
            }
            return $score;
        }
        
    $s = ['R', 'R', 'R', 'R'];
        echo prizeCounter($s);
     ?>

    <script src="game.js"></script>
</body>
</html>