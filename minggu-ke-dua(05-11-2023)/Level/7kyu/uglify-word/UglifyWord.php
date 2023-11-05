<?php
function uglify_word(string $str)
{
    $str_transform = '';
    $result = '';
    foreach (str_split($str) as $value) {
        preg_match('/[A-Z]/', $str_transform) ? 
        $str_transform = strtolower($value) : 
        $str_transform = strtoupper($value);
        $result .= $str_transform;
   }
   return $result;
}

$word = "AaA";

uglify_word($word);

// function uglify_word(string $str): string
// {
//   $result = '';
//   $previous = '';
//   foreach (str_split($str) as $char) {
//     preg_match('/[A-Z]/', $previous) ? $previous = strtolower($char) : $previous = strtoupper($char);    
//     $result .= $previous;
//   }
  
//   return $result;
// }