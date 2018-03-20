<?php

//<p>17.Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
//месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>

$year = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
    'October', 'November', 'December'];
foreach ($year as $mn){

//$year=[1,2,3,4,5,6,7,8,9,10,11,12];
//    $month=date("n");

    $month=date("F");
    if ($mn==$month){
        echo "<b>$mn</b></br>";
    }else{
        echo($mn)."<br>";}
}
$month=date("F");
echo "<b>$month</b>";

?>