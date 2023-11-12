<?php

function makeParts($arr,$chunkSize){
var_dump(array_chunk($arr, $chunkSize));
}

makeParts( arr:[1, 2, 3, 4, 5], chunkSize:2 );