<?php

include_once 'Worker.php';                       //class Worker - Класс
include_once 'OfiWorker.php';                    // $work - объект
include_once 'Student.php';                      // $имяОбъекта -> егоСвойство
include_once 'Driver.php';


//Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
//Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта) -
//имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася',
//возраст 26, зарплата 2000.



$work = new Worker;

$work->name = 'Vladimir';
$work->age = 27;
$work->salary = 3000;

$work2 = new Worker;
$work2->name = 'Vasiliy';
$work2->age = 15;
$work2->salary = 500;

echo $work->age + $work2->age;
echo "<br/>";
echo $work->salary + $work2->salary;


//Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и следующие
//public методы setName, getName, setAge, getAge, setSalary, getSalary.
//Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.

//Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность
//(от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный -
//он не должен меняться).

$work = new Worker;
$work->setName('Владимир');
$work->setAge(27);
$work->setSalary(2000);


$work2 = new Worker;
$work2->setName2('Вася');
$work2->setAge2(99);
$work2->setSalary2(500);

echo $work->getName();
echo "<br/>";
echo $work2->getName2();
echo "<br/>";
echo $work->getAge() + $work2->getAge2();
echo "<br/>";
echo $work->getSalary() + $work2->getSalary2();

//Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). Сделайте так, чтобы эти
//свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ).
// Сделайте также public методы getName, getSalary.
//Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.

$work = new Worker('Vova', 1000);
echo $work->getName();
echo "<br/>";
echo $work->getSalary();

//Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName,
//setAge, getAge.
//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а также
//методы public getSalary и setSalary.
//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26,
//зарплата 2000. Найдите сумму зарплата Ивана и Васи.
//Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также
//геттеры и сеттеры для них.

$user = new User();
$user->setName('Vova ');
$user->setAge('27'.' лет ');
echo $user->getName();
echo $user->getAge();

$work = new Worker();
$work->setSalary(100500);
echo $work->getSalary();

echo "<br/>";

$user2 = new User();
$user2->setName('Ivan ');
$user2->setAge('25'.' лет ');
echo $user2->getName();
echo $user2->getAge();

$work2 = new Worker();
$work2->setSalary(1000);
echo $work2->getSalary();

echo "<br/>";

$user3 = new User();
$user3->setName('Uasia ');
$user3->setAge('26'.' лет ');
echo $user3->getName();
echo $user3->getAge();

$work3 = new Worker();
$work3->setSalary(2000);
echo $work3->getSalary();

echo "<br/>";

echo $work2->getSalary() + $work3->getSalary();

echo "<br/>";

$studentInfo = new Student();
$studentInfo->setScholarship('300'.' BYN');
$studentInfo->setCourse('1'.' курс');
echo $studentInfo->getScholarship();
echo "<br/>";
echo $studentInfo->getCourse();

echo "<br/>";
//Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи. Этот метод должен
//вносить следующие private поля: водительский стаж, категория вождения (A, B, C).

$driver = new Driver();
$driver->setDrivingExperience('4'.' года ');
$driver->setDrivingCategory('A');
echo  $driver->getDrivingExperience();
echo $driver->getDrivingCategory();


