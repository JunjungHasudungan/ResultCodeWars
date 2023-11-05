<?php
function comp($arr_1, $arr_2): bool {
    if($arr_1 === null | $arr_2 === null) {
        return false;
    }

    sort($arr_1); // sorting nilai array
    sort($arr_2);
    
    for($index = 0; $index < count($arr_1); $index++) { // looping array pertama 
        if($arr_1[$index] * $arr_1[$index] !== $arr_2[$index]) { // validasi pengecekan
            return false;
        }
    }
    return true;
}

$arr_1 = [121, 144, 19, 161, 19, 144, 19, 11];
$arr_2 = [121, 14641, 20736, 361, 25921, 361, 20736, 361];
comp($arr_1, $arr_2);