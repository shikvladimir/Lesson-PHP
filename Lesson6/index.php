<?php
include_once __DIR__."/vendor/autoload.php";

//3. Создать интерфейс c двумя методами : writeToLog и readFromLog
//4. Создать два класса: FileLogger и DBLogger, (в реализации методов можно просто вывести какую-то строку)
//5. Интерфейсы и классы должны содержать неймспейсы


$FileLogger = new \Log\FileLogger();
$FileLogger->file = 'Привет! Я новый файл!';
echo $FileLogger->Logger();

echo "<br/>";

$DBLogger = new \Log\db\DBLogger();
$DBLogger->db = 'Привет! Я база данных!';
echo $DBLogger->Logger2();

echo "<br/>";

$read = new \Log\write_read\FromLog();
echo $read->readFromLog();

echo "<br/>";

$write = new \Log\write_read\FromLog();
echo  $write->writeToLog();

