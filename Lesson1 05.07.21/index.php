
<?php
/*
1. Создать 5 переменных
2. У каждой переменной должен быть свой тип данных
*/
$one = 5;
$two = '7';
$three = 3.14;
$four = 'hello world';
$five = True;

//3. Вывести эти переменные на экран (echo)
echo $one."<br>";
echo $two."<br>";
echo $three."<br>";
echo $four."<br>";
echo $five."<br>";

/*4. Используя var_dump() вывести на экран
результат 5 математических операций
*/
$sum1 = $one + $three;
var_dump($sum1);

$sum2 = $two - $one;
var_dump($sum2);

$sum3 = $two / $three;
var_dump($sum3);

var_dump($one * $two);

var_dump($two % $three);

/*
5.  Используя var_dump() вывести на экран
результат 5 операций сравнений
*/

var_dump($one > $three)."<br>";

var_dump($one < $three)."<br>";

var_dump($one == $three)."<br>";

var_dump($one != $three)."<br>";

var_dump($one === 5);