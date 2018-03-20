<?php
/*<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей,
 * с помощью второго — столбец элементов.</p>
 */
$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');

echo '<h2></h2>';
foreach ($arr as $key => $value)
    echo "$key<br>\n";


echo '<h2></h2>';
foreach ($arr as $value)
    echo "$value<br>\n";

?>