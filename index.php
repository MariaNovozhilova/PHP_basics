<?php

# создание переменной

$currentPageText = 'Hello World 123';

echo $currentPageText;

# логические операции

$thisIsLessonAboutPHP = true;
$aliensExists = false;

var_dump(! $aliensExists);
var_dump(!! $aliensExists);

#базовые математические операции

$number1 = 10;
$number2 = 5;

echo 'Сложение + : ' . ($number1 + $number2) . PHP_EOL;
echo 'Вычитание - : ' . ($number1 - $number2) . PHP_EOL;
echo 'Умножение * : ' . ($number1 * $number2) . PHP_EOL;
echo 'Деление / : ' . ($number1 / $number2) . PHP_EOL;

echo 'Остаток от деления % : ' . (6 % $number2) . PHP_EOL;

$number2 += 4;

echo $number2 . PHP_EOL;

#Унарные операции, инкрементирование
$number = 5;

echo -$number . PHP_EOL;

$number1 = 10;
$number2 = 5;

echo $number1++ . PHP_EOL;
echo $number1 . PHP_EOL;

echo $number2-- . PHP_EOL;
echo $number2 . PHP_EOL;

echo ++$number1 . PHP_EOL;
echo --$number2 . PHP_EOL;  

#операции сравнения

$number = 10;

var_dump($number > 10);
var_dump($number < 10);
var_dump($number >= 10);
var_dump($number <= 10);
var_dump($number == 10);
var_dump($number != 10);
var_dump($number === 10); #тождественно равно (и тип, и значение)
var_dump($number !== 10);

echo 'тожественно равно для строки / просто равно';

var_dump($number === '10');
var_dump($number == '10');

# оператор SpaceShip (космический корабль)
var_dump($number <=> 10);
var_dump($number <=> 5);
var_dump($number <=> 15);

#строки
$user = 'Михаил';

// обычная строка
$sentence1 = '$user программирует на РНР';

// компилируемая строка
$sentence2 = "$user программирует на РНР";

echo $sentence1 . PHP_EOL;
echo $sentence2 . PHP_EOL;

#  конкатенация

echo $user . ' программирует на PHP' . PHP_EOL;

$line = 'Привет';
$line .= ', ' . $user;

echo $line . PHP_EOL;

// strlen|mb_strlen

$userStringLenth = strlen($user);

echo "Длина строки $user равна: $userStringLenth" . PHP_EOL;
# функция возвращает количество байт для хранения строки, не количество символов
# поэтому с кириллицей так (1 символ кириллицей = 2 байта)
# эта проблема решается mb_strlen

$userStringLenthmb = mb_strlen($user);
echo "Длина строки $user равна: $userStringLenthmb" . PHP_EOL;

// trim|ltrim|rtrim(строка, 'символ, по умолчанию пробел - учитывается не комбинация, а каждый символ')

$linetotrim = '   строка с    пробелами   ';

echo 'Получившаяся строка: "' . trim($linetotrim) . '"' . PHP_EOL;
echo 'Получившаяся строка: "' . ltrim($linetotrim) . '"' . PHP_EOL;
echo 'Получившаяся строка: "' . rtrim($linetotrim) . '"' . PHP_EOL;

$url = '/page/';

echo 'Получившаяся строка: "' . trim($url, '/') . '"' . PHP_EOL;

// strpos|stripos - ищет комбинацию символов (подстроку) внутри строки,возвращает номер елемента 
$sentence = 'This program on PHP';

echo 'Позиция подстроки: ' . strpos($sentence, 'PHP') . PHP_EOL;
echo 'Позиция подстроки: ' . strpos($sentence, 'php') . PHP_EOL;
echo 'Позиция подстроки: ' . stripos($sentence, 'php') . PHP_EOL;

// strpos - регистрозависимая, stripos - нет.

// substr | mb_substr(string, offset, lenth)

echo substr('Hello World', 2) . PHP_EOL;
echo substr('Hello World', 2, 2) . PHP_EOL;
echo substr('Hello World', -5) . PHP_EOL;
echo substr('Hello World', -5,1) . PHP_EOL;
echo substr('Hello World', 2, -2) . PHP_EOL;

// str_replace
echo str_replace('не ', '', 'Я не знаю PHP') . PHP_EOL;

// Вспомогательные ссылки
// Строки: https://www.php.net/manual/ru/language.types.string.php
// Функции для работы со строками: https://www.php.net/manual/ru/ref.strings.php

// Константы

define ('DAYS_COUNT_IN_WEEK', 7);
const WEEKENDS_IN_WEEK = 2;

// значение константы может быть с любым не ссылочным типом данных
// магические константы __FILE__

// magic_constants.php

var_dump(__FILE__); // выводит полный путь к этому файлу
var_dump(__DIR__);  // выводит полный путь к текущей директории
var_dump(__LINE__); // выводит номер строки в этом файле

var_dump(__FUNCTION__);  // выводит название текущей функции, если код внутри функции
var_dump(__NAMESPACE__); // выводит пространство имен этого файла
var_dump(__CLASS__);     // выводит имя текущего класса (для ООП)
var_dump(__METHOD__);    // выводит имя исполняемого метода объекта (для ООП)

// тип данных null
// null.php

var_dump($notDefinedVariable); // null

$ageOfUser = null;

var_dump(isset($ageOfUser)); // false

var_dump(is_null($ageOfUser)); // true
var_dump(null === $ageOfUser); // true



