<?php
function will_you(bool $young, bool $beautiful, bool $loved):bool {
    // Coding and coding ... 
    return ($young && $beautiful) != $loved;
  }

will_you(young: false, beautiful:true, loved: false);