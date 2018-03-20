<<<<<<< Updated upstream
<?php
//<p>12. С помощью конструкции switch выведите фразу: "Неизвестный день",
//если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно).</p>

$day = 11;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5: echo('Це робочий день');break;
    case 6:
    case 7: echo ('Це вихідний день');break;
    default: echo ('Невідомий день');
    }


?>