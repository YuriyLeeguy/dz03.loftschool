<?php
include "src/function.php";
const DEF_LINE = "<BR>";
//const DEF_LINE = PHP_EOL;

echo "Задание № 1" . DEF_LINE;
$result_1 = task1(['Я пошел на работу', 'Закрой дверь', 1, 100, 500], true);
echo $result_1 . DEF_LINE . DEF_LINE;

echo "Задание № 2" . DEF_LINE;
$result_2 = task2('/', 100, 0, 500);
echo $result_2 . DEF_LINE . DEF_LINE;

echo "Задание № 3 (Таблица)" . DEF_LINE;
$result_3 = task3(10, 10);
echo $result_3 . DEF_LINE . DEF_LINE;

echo "Задание № 4" . DEF_LINE;
echo task4() . DEF_LINE . DEF_LINE;

echo "Задание № 5" . DEF_LINE;
echo task5() . DEF_LINE . DEF_LINE;

echo "Задание № 6" . DEF_LINE;
$text = "Hello again!";
echo task6($text) . DEF_LINE . DEF_LINE;

echo "Задание № 6_1" . DEF_LINE;
echo task6_1('test.txt');

unlink('test.txt');
