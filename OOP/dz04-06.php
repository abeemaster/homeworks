<?php
/**Сделайте класс Worker, в котором будут следующие private поля - name (имя),
 * age (возраст), salary (зарплата) и следующие public методы
 * setName, getName, setAge, getAge, setSalary, getSalary.
 */

class Worker
{
    private $name;
    private $age;
    private $salary;


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

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

/** Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000. */

$ivan = new Worker();
$ivan->setName('Иван');
$ivan->setAge(25);
$ivan->setSalary(1000);

$vasya = new Worker();
$vasya->setName('Вася');
$vasya->setAge(26);
$vasya->setSalary(2000);

/** Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи. */

$sumSalary = $ivan->getSalary() + $vasya->getSalary();
$sumAge = $ivan->getAge() + $vasya->getAge();

echo 'Сума зарплат - ' . $sumSalary.'<br>';
echo 'Сума возрастов - ' . $sumAge;