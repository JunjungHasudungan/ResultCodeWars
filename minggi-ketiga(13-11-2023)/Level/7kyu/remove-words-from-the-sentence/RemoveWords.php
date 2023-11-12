<?php

function remove(string $s): string {
    return implode(" ", array_filter(explode(" ", $s), function($word) {
        return substr_count($word, "!") !== 1;
    }));
  }

  remove("Hi Hi! Hi!");