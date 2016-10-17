<?php

class PrimeGenerator {

    public static function generate($n) {
        if ($n == 0)
            return false;
        //return array(1, 2, 5, 10);
        $dividers = [];
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0)
                $dividers[] = $i;
        }
        return $dividers;
    }

}

?>
