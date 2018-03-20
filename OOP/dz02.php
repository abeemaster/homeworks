<?php
/**Создайте объект этого класса, затем установите поля в следующие значения
 * (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000.
 * Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася',
 * возраст 26, зарплата 2000.
 */

class Worker
{
    public $name;
    public $age;
    public $salary;
}

$ivan = new Worker;

$ivan->name = 'Ivan';
$ivan->age = 25;
$ivan->salary = 1000;

$vasya = new Worker;

$vasya->name = 'Vasya';
$vasya->age = 26;
$vasya->salary = 2000;