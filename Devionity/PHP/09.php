<?php

/* Создать функцию, которая принимает один аргумент в виде массива
 и дописывает в него последним элементом количество значений массива*/


function addItem(array & $arr)
{
    $length = count($arr);
    array_push($arr, $length);
}
$myArray = [1, 2, 3, 4, 5, 0, 0];
addItem($myArray);
echo '<pre>';
print_r($myArray);
echo '</pre>';

?>