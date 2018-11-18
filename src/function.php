<?php

/*Задание #1
1. Функция должна принимать массив строк и выводить каждую строку в отдельном
параграфе (тег <p>)
2. Если в функцию передан второй параметр true, то возвращать (через return)
результат в виде одной объединенной строки.
 */

function task1($array, $boolean = false)
{
    $parameter = implode('<p>', $array);
    echo $parameter;

    if ($boolean) {
        $parameter = implode(' ', $array);
        return $parameter;
    }
    return null;
}

/*Задание #2
1. Функция должна принимать переменное число аргументов.
2. Первым аргументом обязательно должна быть строка, обозначающая
арифметическое действие, которое необходимо выполнить со всеми
передаваемыми аргументами.
3. Остальные аргументы это целые и/или вещественные числа.
*/

function task2()
{
    $numbers = func_get_args(); // записал в переменную параметры переданные в функцию
    $sing = array_shift($numbers); // сохранил первый параметр (знак) в переменную, с удалением и смещением
    $result = $numbers[0]; // записал значение о первом элементе массива в переменную
    $equal = " = "; // переменная для отображения равенства

    switch ($sing) {
        case '+':
            for ($i = 1; $i < count($numbers); $i++) {
                $result = $result + $numbers[$i];
            }
            break;
        case '-':
            for ($i = 1; $i < count($numbers); $i++) {
                $result = $result - $numbers[$i];
            }
            break;
        case '*':
            for ($i = 1; $i < count($numbers); $i++) {
                $result = $result * $numbers[$i];
            }
            break;
        case '/':
            for ($i = 1; $i < count($numbers); $i++) {
                if ($numbers[$i] !== 0) {
                    $result = $result / $numbers[$i];
                } else {
                    $numbers[$i] = "";
                }
            }
            break;

        default:
            $fail = "Не правильный первый параметр, выбери один из следующих знаков: '+', '-', '*' или '/'";
            return $fail;
    }
    $echo = implode(" $sing ", $numbers);
    return $echo . $equal . $result;
}

/*Задание #3(Использование рекурсии не обязательно)
1. Функция должна принимать два параметра – целые числа.
2. Если в функцию передали 2 целых числа, то функция должна отобразить таблицу
умножения размером со значения параметров, переданных в функцию. (Например
если передано 8 и 8, то нарисовать от 1х1 до 8х8). Таблица должна быть
выполнена с использованием тега <table>
3. В остальных случаях выдавать корректную ошибку.*/

function task3($rows, $cols)
{
    $check = func_get_args();
    if (2 !== count($check)) {
        $wrong = "Не верное каличество параметров";
        return $wrong;
    }
    if (!is_integer($rows) or !is_integer($cols)) {
        $wrong_1 = "Ведите целое число";
        return $wrong_1;
    }
    if (($rows < 1) or ($cols < 1)) {
        $wrong_2 = "Ведите положительное число";
        return $wrong_2;
    }
    $table = "<table align='center' border='1'>";
    for ($tr = 1; $tr < $rows + 1; $tr++) {
        $table .= "<tr>";
        for ($td = 1; $td < $cols + 1; $td++) {
            $table .= "<td>" . $tr * $td . "</td>";
        }
        $table .= "</tr>";
    }
    $table .= "</table>";
    return $table;
}

/* Задание #4
1. Выведите информацию о текущей дате в формате 31.12.2016 23:59
2. Выведите UnixTime время соответствующее 24.02.2016 00:00:00
*/
function task4()
{
    $timeNow = date('d.m.Y h:i');
    $unixTime = mktime(0, 0, 0, 2, 24, 2016);
    $normUnixTime = date('d.m.Y H:i:s', $unixTime);
    return $timeNow . "<BR>" . $normUnixTime;
}

/*Задание #5
1. Дана строка: “Карл у Клары украл Кораллы”. удалить из этой строки все заглавные
буквы “К”.
2. Дана строка “Две бутылки лимонада”. Заменить “Две”, на “Три”. По желанию
дополнить задание.
*/
function task5()
{
    $strKarl = "Карл у Клары украл Кораллы";
    $str = str_replace('К', ' ', $strKarl);
    $strChanger = "Две бутылки лимонада";
    $str1 = str_replace('Две', 'Три', $strChanger);
    $result = $str . "<BR>" . $str1;
    return $result;
}

/* Задание #6
1. Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”
2. Напишите функцию, которая будет принимать имя файла, открывать файл и
выводить содержимое на экран.
*/

function task6($text)
{
    file_put_contents('test.txt', $text);
    $textFile = file_get_contents('test.txt');
    return $textFile;
}

function task6_1($nameFile)
{
    $result = file_get_contents($nameFile);
    return $result;
}
