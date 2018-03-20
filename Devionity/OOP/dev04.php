<?php
/**Создать массив, который описывает сообщение ключами name, email, message с соответствующими значениями.
 * Привести массив к объекту. Проанализировать результат при помощи var_dump.
 */

$a = ['name'=>'Mike', 'email'=>'mike@mike.co', 'message'=>'bla-bla'];
$obj = (object)$a;

var_dump($obj);