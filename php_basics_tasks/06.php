<?php
//<p>6. Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии,
// что значение переменной age больше 59.</p>

$age = 47;
if ($age >= 18 and $age < 60) {
    echo "Вам ще працювати і працювати";
} elseif ($age > 59) {
    echo "Вам вже варто на песію";
}

?>