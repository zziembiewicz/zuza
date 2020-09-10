<?php
//wersja PHP 7.4.9
echo PHP_VERSION, '<br>';
//echo phpinfo();

$pow=2**8;
echo $pow;

echo 'a', 'b', 'c'; //abc
echo '<br>';
echo 'a'. 'b'. 'c';//a+b+c=>abc

//operatory bitowe
// and &, or |, xor ^, not ~, przesunięcie bitowe w lewo <<, przesunięcie bitowe w prawo >>
$x=0b1010;
echo"<hr>$x<br>";

$x=$x<<2; //101000(2) => 8+32=40
echo "$x<br>";

$x = $x >> 1; //10100(2) => 4+16=20
echo "$x<br>";

//porównanie <=>
$x=10;
$y=20;
echo $x<=>$y;
$result = $x<=>$y;
echo $result;
 ?>
