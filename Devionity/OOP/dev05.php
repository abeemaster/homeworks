<?php
/**В класс Car из предыдущих заданий добавить методы showBrand(), showModel() которые
 * выводят на экран значения свойств brand, model соответственно.
 */

class Car
{
    public $brand;
    public $model;
    public $year;
    public $drive;

    public function showBrand()
    {
        echo $this->brand;
    }
    public function showModel()
    {
        echo $this->model;
    }
}



$toyota = new Car;
$toyota->brand = 'Toyota ';
$toyota->showBrand();

$toyota->model = 'Corolla';
$toyota->showModel();

/**В класс User из предыдущих заданий добавить свойство isLogged, которое принимает true,
 * если пользователь успешно авторизировался, и false при выходе из системы.
 * Задать значения для этого свойства в методах login(), logout().
 */

class User
{
    public $login;
    public $password;
    public $email;
    public $rating = 0;
    public $isLogged;

    public function login()
    {
        echo $this->isLogged;
        $this->logout();
    }

    public function logout()
    {
        echo ' logout <br>';
    }
}

$mike = new User;
$mike->isLogged = true;
$mike->login();

$mike->isLogged = false;
$mike->logout();

