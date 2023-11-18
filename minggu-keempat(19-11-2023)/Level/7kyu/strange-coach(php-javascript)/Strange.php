<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Simple Fun #203: Strange Coach</title>
</head>
<body>
    <?php
        function strangeCoach($players){
            $group_player = [];
            foreach($players as $player) { // iteraasi / mengeluarkan semua elemen
                 $first_char = $player[0]; // mengambil huruf pertama dari setiap elemen
                 if(!isset($group_player[$first_char])) {
                    $group_player[$first_char] = 0;
                 }
                 $group_player[$first_char]++; // mengulang sebanyak huruf pertama
            }
            // filter nama pemain berdasarkan karakter nama pertama
            $create_team = array_filter($group_player, function($value) {
                return $value >= 5; // mengembalikan value / huruf pertama 
            });  // array(2) { ["b"]=> int(6) ["k"]=> int(7) } 

            if(!empty($create_team)) {
                // mengembambil key berdasarkan dengan array yang telah dikembalikan
                $first_letter = array_keys($create_team); 
                sort($first_letter);
                return implode('', $first_letter);
            }else {
                return "forfeit";
            }
        }
        
        // $players = ["michael","jordan","lebron","james","kobe","bryant"];
        $players = [
            "babic", "keksic", "boric", "bukic", "sarmic", "balic", "kruzic", "hrenovkic", 
            "beslic", "boksic", "krafnic", "pecivic", "klavirkovic", "kukumaric", "sunkic", 
            "kolacic", "kovacic", "prijestolonasljednikovic"
        ];
        echo strangeCoach($players);
    ?>

    <script src="pelatih.js"></script>
</body>
</html>