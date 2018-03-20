<?php
/**Для класса User из предыдущего занятия создать методы login(), logout(),
 * которые просто выводят на экран соответствующее сообщение.
 * Создать экземпляр класса, вызвать созданные методы.
 */

class User
{
    public $login;
    public $password;
    public $email;
    public $rating = 0;
    public $logout;

    public function login()
{
    echo 'Login<br>';
}

    public function logout()
{
    echo 'Logout<br>';
}
}

$mike = new User;
$mike->login();
$mike->logout();