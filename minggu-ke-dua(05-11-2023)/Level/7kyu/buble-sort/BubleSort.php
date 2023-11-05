<?php
function bubblesort_once($array) {
    $next_element = 1;

    for ($index = 0; $index < count($array) - $next_element; $index++) { // 7, 9, 5, 3, 1, 2, 4, 6,
       if($array[$index] > $array[$index + $next_element]) { //  [7, 9, 5, 3, 1, 2, 4, 6] > [9, 5, 3, 1, 2, 4, 6, 8]
            $temp_arr = $array[$index]; // 953
             $array[$index] = $array[$index + $next_element]; // 531
            $array[$index + $next_element] = $temp_arr; // 9999999
       }
    }


    return $array; //  7  5  3  1  2  4  6  8  9 
  }

// urutan = 0, 1, 2, 3, 4, 5, 6, 7, 8 => 9
  $array = [7, 9, 5, 3, 1, 2, 4, 6, 8]; // jumlah element 9
//  [7, 9, 5, 3, 1, 2, 4, 6] > [9, 5, 3, 1, 2, 4, 6, 8]
bubblesort_once($array);