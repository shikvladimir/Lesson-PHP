<?php

//Домашнее задание:
//1. Создать  ассоциативный массив из 10 элементов

$arrayOurGroup = [
    'one' => 'Shik Vladimir',
    'two' => 'Alexandra Matievskaya',
    'three' => 'Nikita Gashnikov',
    'four' => 'Nikita Chepikov',
    'five' => 'Olga Lazuk',
    'six' => 'Igor Pozniak',
    'seven' => 'Andrei Lashkevich',
    'eight' => 'Ivan Brunevskiy',
    'nine' => 'Andrey Makalovich',
    'ten' => 'Sensei IgorOk'
];

//2. При помощи foreach вывести элементы массива на экран
sort($arrayOurGroup);
foreach($arrayOurGroup as $a){
    echo $a."\n\r";
}

//3. при помощи for создать массив из 20 элементов при помощи функции ранд
//4.  Вывести элементы массива которые делятся на 3 и на 5 без остатка

$arr = [];
for($a = 0; $a < 20; $a++){
    $arr = rand(0, 20);
    // print_r ($arr."\n");

    if ($a % 3 == 0 || $a % 5 == 0){
        print_r("(" . $a .")"."\n");
    }
}
