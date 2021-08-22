<?php
//Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
//Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта) -
//имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася',
//возраст 26, зарплата 2000.

class Worker
{
    public $name;
    public $age ;
    public $salary;
}

//Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и следующие
//public методы setName, getName, setAge, getAge, setSalary, getSalary.
//Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.

class Worker
{
    private $name;
    private $age;
    private $salary;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if($this->checkAge($age)){
            $this->age = $age;
        }
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getName2()
    {
        return $this->name;
    }

    public function setName2($name)
    {
        $this->name = $name;
    }

    public function getAge2()
    {
        return $this->age;
    }

    public function setAge2($age)
    {
        if($this->checkAge($age)){
            $this->age = $age;
        }
    }

    public function getSalary2()
    {
        return $this->salary;
    }

    public function setSalary2($salary)
    {
        $this->salary = $salary;
    }

//Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность
//(от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный -
//он не должен меняться).
    private function checkAge($age)
    {
        if ($age < 100) {
            return true;
        } else {
            return false;
        }
    }
}

//Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). Сделайте так, чтобы эти
//свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ).
// Сделайте также public методы getName, getSalary.
//Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.

class Worker
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

//Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName,
//setAge, getAge.
//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а также
//методы public getSalary и setSalary.
//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26,
//зарплата 2000. Найдите сумму зарплата Ивана и Васи.
//Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также
//геттеры и сеттеры для них.

class User
{
    protected $name ;
    protected $age ;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}