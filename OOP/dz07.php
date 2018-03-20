<?php
/**
 * Дополните класс Worker из предыдущей задачи private методом checkAge,
 * который будет проверять возраст на корректность (от 1 до 100 лет).
 * Этот метод должен использовать метод setAge перед установкой нового возраста
 * (если возраст не корректный - он не должен меняться).
 */

class Worker
{
    private $name;
    private $age;
    private $salary;

    private function checkAge($age){
        if(1 < $age and $age < 100) {
            $check = true;
        }else{
            $check = false;
        }
        return $check;
    }

    public function setAge($age){
    if($this->checkAge($age)){
        $this->age = $age;
    }
    }


    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}


$ivan = new Worker();
$ivan->setName('Иван');
$ivan->setAge(250);
$ivan->setSalary(1000);

$vasya = new Worker();
$vasya->setName('Вася');
$vasya->setAge(26);
$vasya->setSalary(2000);


$sumSalary = $ivan->getSalary() + $vasya->getSalary();
$sumAge = $ivan->getAge() + $vasya->getAge();

echo 'Сума зарплат - ' . $sumSalary.'<br>';
echo 'Сума возрастов - ' . $sumAge;