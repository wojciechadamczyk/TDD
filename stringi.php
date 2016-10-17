<?php

$str = "Ala ma kota";

echo $str[0];

echo $str[1];
echo "<br>";
print substr($str, 4, 2);
echo "<br>";
explode(' ', $str);

print implode('_', explode(' ', $str)) . "<br/>";

print strlen($str) . "<br/>";
print trim($str) . "<br/>";

print strcmp("kot", "pies") . "<br/>";

print strstr($str, "ma", true ) . "<br/>"; 

print str_replace("kota", "psa", $str) . "<br/>"; //zastepuje slowa kota na psa

print strtoupper("ala ma kota") . "<br/>"; //zmienia wszystkie te literki na wielkie

print ucwords ("ala ma kota") . "<br/>"; //zmienia wszystkie pierwsze litery wyrazu na Wielkie

print strtolower("ala ma kota") . "<br/>"; //zmienia literki na male

print ucfirst("ala ma kota") . "<br/>"; //zmienia 1 litere na wielka

print addslashes($str) . "<br/>"; //dodaje odwrotne ukosniki przed znakami ktore tego wymagaja 

print stripslashes($str) . "<br/>"; //usuwa dzialanie addslashes
