<?php
//1. Удалить из строки пробелы и определить, является ли она перевертышем

//$str = '1. Удалить из строки пробелы и определить, является ли она перевертышем';
//$str = str_replace(" ", "", $str);
//echo ($str) . "<br>";
//
//$strReverse = strrev($str);
//
//if ($str == $strReverse) {
//    echo 'строка является перевертышем';
//} else {
//    echo 'строка НЕ является перевертышем';
//}


//2. Найти самое длинное слово в строке (РАЗОБРАТЬ ПОДРОБНО)
//$str = "Найти самое длинное слово в строке";
//$arrString = explode(" ", $str);
//
//$max = $arrString[0];
//for ($i=0; $i < count($arrString); $i++){
//    if(mb_strlen($arrString[$i]) >  mb_strlen($max)){//???
//        $max = $arrString[$i];//???
//    }
//}
//echo $max;


//3. Посчтитать Количество Заглавных и Прописных букв в строке

//$string = 'Lorem ipsum Dolor Sit amet, Consectetur';
//$string = str_replace(" ", "", $string);
//
//$dtliteTuopper = preg_replace("/[A-Z-,]/", "", $string);
//$lowerCase_long = strlen($dtliteTuopper);
//
//$dtliteTulower = preg_replace("/[a-z-,]/", "", $string);
//
//$upperCase_long = strlen($dtliteTulower);
//
//print_r ('В данной строке ' . $lowerCase_long .' прописных симвалов и ' . $upperCase_long . ' заглавных');


//4. Посчитать количество четных и нечетных элементов массива
//$arr = [1, 7, 12, 15, 22, 33, 45, 85, 57, 61, 3, 2];
//
//$res1 = 0;
//$res2 = 0;
//
//foreach($arr as $i){
//
//    if($i % 2 == 0){
//        $res1++;
//    }
//    else if ($i % 2 != 0){
//        $res2 ++;
//    }
//}
//echo 'четных чисел: ' . $res1 . ' нечетных: ' . $res2;

//5. Вывести на экран те элементы массива, которые выше среднего значения

//$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//$res = 0;
//$averageValue = array_sum($arr) / count($arr);
//
//foreach($arr as $a){
//    if ($a > $averageValue){
//        echo $a."<br>";
//    }
//}

//6.  Найти наибольший и наименьший элементы массива (не используя стандартные ф-ции min и max)

//$arr = [10, 12, 55, 100, 88, 3, 235, 44, 658, 254];
//
//sort($arr, SORT_NUMERIC);
//
//foreach($arr as $v);
//
//$firsMin = array_shift($arr);
//$lastMax = array_pop($arr);
//
//echo 'наибольший элемент: ' . $lastMax . ' наименьший элемент: ' . $firsMin;

//7. Преобразовать двумерный массив в одномерный

//$arr =
//    [
//        ['V', 'o', 'v', 'a'],
//        ['S', 'h', 'i', 'k'],
//        [1, 9, 9, 4]
//
//    ];
//
//foreach($arr as $arr2){
//    foreach($arr2 as $a){
//        echo ($newArrMerg[] = $a);
//    }
//}

//8. В двумерном массиве поменять четные и нечетные столбцы местами
//$arr =
//    [
//        [1, 2, 3, 4],
//        [5, 6, 7, 8]
//
//    ];
//print_r($arr);
//foreach ($arr as $arr2) {
//    $reversed = array_reverse($arr2);
//    print_r($reversed);
//}

//version 2

//$arr =
//    [
//        [1, 2, 3, 4],
//        [5, 6, 7, 8]
//    ];
//
//foreach ($arr as $arr1) {
//    $arr1 = array_chunk($arr1, 2);
//
//    foreach ($arr1 as $arr2Val) {
//        $arr2Val2 = array_reverse($arr2Val);
//        // print_r ($arr2Val2);
//        foreach ($arr2Val2 as $a) {
//            $mas1[] = $a;
//            $masNew = array_chunk($mas1, 4);
//            print_r($masNew);
//        }
//    }
//}