<?php
//$x = true xor false;
//$b = true xor true;
//$a = true xor true; // (1 + 1) % 2 = 0 (false)
//$c = false xor true; // (0 + 1) % 2 = 1 (true)
//$f = true xor true; // false
//var_dump($x, $b, $a, $c, $f);

//Обмен значений переменных
$a = $a + $b;
$b = $a - $b;
$a = $a - $b; // $a и $b поменялись своими значениями

?>