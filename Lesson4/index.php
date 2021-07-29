<?php
//1.  Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.
function week($x)
{
    if ($x == 1) {
        echo 'Понедельник' . '<br>';
    } elseif ($x == 2) {
        echo 'Вторник' . '<br>';
    } elseif ($x == 3) {
        echo 'Среда' . '<br>';
    } elseif ($x == 4) {
        echo 'Четверг' . '<br>';
    } elseif ($x == 5) {
        echo 'Пятница' . '<br>';
    } elseif ($x == 6) {
        echo 'Суббота' . '<br>';
    } elseif ($x == 7) {
        echo 'Воскресенье' . '<br>';
    } else {
        echo 'Ошибка' . '<br>';
    }
}

week(8);

//2. Создайте функцию, которая обрезает строку до нужного размера.  Необходимо учесть,
//что слово в конце строки не должно быть обрезано
$stri = 'If you find a disabled function that should be whitelisted, please leave a comment';

function cut($i)
{
    $i = str_split($i);               //Преобразует строку в массив
    $i1 = array_slice($i, 0, 12);     //Выбирает срез массива
    $i2 = implode('', $i);            //Объединяет элементы массива в строку
    $i3 = implode('', $i1);
    $i22 = explode(' ', $i2);         //Разбивает строку с помощью разделителя
    $i33 = explode(' ', $i3);

    if (end($i22) != end($i33)) {       //проверка на обрезанное слово
        array_pop($i33);
        print_r(implode(' ', $i33) . '<br>');
    } else {
        echo 'ошибка' . '<br>';
    }
}

cut($stri);


//3.  Написать функцию, которая будет менять порядок слов в строке на обратный
$str = 'You can test your PHP code!';

function rev($a)
{

    $arr = explode(' ', $a);
    $arr = array_reverse($arr);
    $arr = implode(' ', $arr);
    return ($arr);

}

print_r(rev($str));

//4. Написать функцию, которая вычисляет среднее арифметическое элементов массива, переданного ей в качестве аргумента.
//Не использовать array_sum и т.д. Простым перебором через цикл

$arr = [1, 2, 3];
$arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function res($x)
{
    $sum = 0;
    foreach ($x as $v) {
        $sum += $v;
        $averageValue = $sum / count($x);
    }
    echo $averageValue . '<br>';
    return $sum;
}

res($arr);
res($arr2);

//5.  Написать функцию, которая генерирует массив случайных значений.
// Количество элементов массива передается в качестве аргумента

function randomValue($num)
{
    $arr = [];
    for ($i = 0; count($arr) < $num; $i++)
        $arr[] = rand();

    print_r($arr);
    return $arr;
}

randomValue(5);

