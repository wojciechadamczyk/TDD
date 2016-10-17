<?php

header('Content-type: text/plain; charset=utf-8');

function fizzBuzz($number) {
      
    $res = "";
    
    for ($i = 1; $i <= $number; $i++) {
        
        if ($i % 3 == 0 && $i % 5 == 0) {

            $res .= "BUZZFIZZ";

        } else if ($i % 3 == 0) {

            $res .= "Fizz";

        } else if ($i % 5 == 0) {

            $res .= "Buzz";

        } else  {

            $res .= $i;

        }
        
        
    }
    return $res;
}

// fizzBuzz(3);

?>