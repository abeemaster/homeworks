<?php
/**Создать класс Car.
 * Записать в этот класс свойства brand, model, year, driver.
 * Создать экземпляры машин Toyota Corolla (2000), Mazda 6 (2015), Ford Taurus (1995) .
 * В рамках предыдущего задания создать экземпляры класса User для нескольких пользователей системы.
 * В свойство driver объектов класса Car записать объекты класса User.
 * Вывести объекты класса Car на экран при помощи var_dump(), print_r()
 */

class User
{
    public $login;
    public $password;
    public $email;
    public $rating = 0;
}

$mike = new User;
$john = new User;

$mike->login = 'Mike';
$mike->password = 'mike1';
$mike->email = 'mike@mike.com';
$mike->rating = 5;

$john->login = 'John';
$john->password = 'john2';
$john->email = 'john@john.com';
$john->rating = 3;

class Car
{
    public $brand;
    public $model;
    public $year;
    public $drive;
}

$toyota = new Car;
$mazda = new Car;
$ford = new Car;
$mike = new Car;
$john = new Car;

$toyota->brand = 'Toyota';
$toyota->model = 'Corolla';
$toyota->year = 2000;

$mazda->brand = 'Mazda';
$mazda->model = 6;
$mazda->year = 2015;

$ford->brand = 'Ford';
$ford->model = 'Taurus';
$ford->year = 1995;

$mike->drive = 'Mike';
$john->drive = 'John';

var_dump($toyota);
echo $mike->drive . '<br>';
print_r($ford);
echo $mike->drive . '<br>';
print_r($mazda);
echo $john->drive . '<br>';
