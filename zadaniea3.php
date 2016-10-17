<?php
$year = 2015;

function checkYear($year) {
    if ($year % 4 == 0) {
        return true;
    } else {
        return false;
    }
}
?>