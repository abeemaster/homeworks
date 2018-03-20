<?php
//<p>15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число.
// Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
//На экран выводить результат в зависимости от значений этих переменных.
// Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.</p>

if (isset($_POST['a']) && isset($_POST['b']) && isset($_GET['operator'])) {
    $a = $_POST['a'];
    $b = $_POST{'b'};
    $operator = $_POST['operator'];
    switch ($operator) {
        case '+':
            $result = "{$a} {$operator} {$b} = " . ($a + $b);
            break;
        case '-':
            $result = "{$a} {$operator} {$b} = " . ($a - $b);
            break;
        case '*':
            $result = "{$a} {$operator} {$b} = " . ($a * $b);
            break;
        case '/':
            if ($b==0) {
                $result = 'Division by zero';
            } else {
                $result = "{$a} {$operator} {$b} = " . ($a / $b);
            }
            break;
        case '%':
            if ($b==0) {
                $result = 'Division by zero';
            } else {
                $result = "{$a} {$operator} {$b} = " . ($a % $b);
            }
            break;
        default:
            $result = 'Unknown error';
    }
}
if (isset($result)) {
    echo $result;
}

?>