<?php
/* <p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15.
 * С помощью цикла foreach найдите сумму квадратов элементов этого массива.
 *  Результат запишите переменную $result.</p>
 */
  $array = [26, 17, 136, 12, 79, 15];

  $result = 0;
  foreach ($array as $elem) {
      $kvadr = $elem*$elem;
      $result = $result + $kvadr;
  }
  echo $result;
  ?>