<?php
//<p>8. Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, что значение переменной
// age является отрицательным числом, или вовсе числом не является.</p>

$age = 47;
if ($age >= 18 and $age < 60) {
    echo "Вам ще працювати і працювати";
} elseif ($age > 59) {
    echo "Вам вже варто на песію";
} elseif ($age > 0 and $age < 18) {
    echo "Вам ще зарано працювати";
} else {
echo "Невідомий вік";
}

?>