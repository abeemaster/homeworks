<?php

//Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>

function arrayPint(array $myArray)
{
    echo '<pre>';
    print_r($myArray);
    echo '</pre>';
}
$myArray = [1, 2, 3, 4, 5];
arrayPint($myArray);

//function argsTest($x, $y)
//{
//    echo "We got {$x} and we got {$y} <br>";
//}
//
//echo 'What do we have? <br>';
//argsTest(2, 3); // we got 2 and we got 3
//argsTest('Hello', 'World'); // we got Hello and we got World
//
//$a = 2.3;
//$b = -4;
//argsTest($a, $b); // we got 2.3 and we got -4




//$a = [2, 3, 4];
//
//function myFun(Array $a){
//    echo $a;
//}
//
//myFun([2, 3, 4]);

//function myFun(Array $a){
//    echo "<pre>$a</pre>";
//}
//$a = ['Ballons', 'Boll'];
////foreach ($a as $b){
////    echo $b;
////}
//myFun($a);

//Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>
// В зависимости от значения второго аргумента функции, выводить используя var_dump
// или print_r. По умолчанию использовать print_r

//function test($a, $b = 'Foo', $c = 123)
//{
//    echo "First arg: {$a} <br>";
//    echo "Second arg: {$b} <br>";
//    echo "Third arg: {$c} <br>";
//    echo '<br>';
//}
//
//echo 'Lets try some calling <br>';
//
//test(1, 2, 3); // ok
//test(1, 2); // ok
//test(1);
//

?>