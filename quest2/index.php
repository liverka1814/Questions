<?php
//Ветвления и функции
echo "<br>Задание №1<br>";
$a = 6;
$b = 5;
if ($a >= 0 && $b >= 0){
    echo $a + $b;
} elseif ($a < 0 && $b < 0){
    echo $a - $b;
} else {
    echo $a * $b;
}
echo "<br>";

echo "<br>Задание 2<br>";
echo $a > $b ? $a : $b;
echo "<br>";

echo "<br>Задание 3<br>";
switch ($a){
    case 0:
        echo $a;
        break;
    case 1:
        echo $a;
        break;
    case 2:
        echo $a;
        break;
    case 3:
        echo $a;
        break;
    case 4:
        echo $a;
        break;
    case 5:
        echo $a;
        break;
    case 6:
        echo $a;
        break;
    case 7:
        echo $a;
        break;
    case 8:
        echo $a;
        break;
    case 9:
        echo $a;
        break;
}

/*Не совсем понял задание, вывод чисел от $a до 9, если $a = 5 то должно быть
56789? на всякий случай сделаю и этот вариант*/
switch ($a){
    case 0:
        echo $a++;
    case 1:
        echo $a++;
    case 2:
        echo $a++;
    case 3:
        echo $a++;
    case 4:
        echo $a++;
    case 5:
        echo $a++;
    case 6:
        echo $a++;
    case 7:
        echo $a++;
    case 8:
        echo $a++;
    case 9:
        echo $a;
}

echo "<br>Задание 4<br>";
//Сложение
function addition($firstNum, $secondNum)
{
    return $firstNum + $secondNum;
}
//Вычетание
function substraction($firstNum, $secondNum)
{
    return $firstNum - $secondNum;
}
//Умножение
function multiplication($firstNum, $secondNum)
{
    return $firstNum * $secondNum;
}
//Деление
function division($firstNum, $secondNum)
{
    return $firstNum / $secondNum;
}
//Деление по модулю
function modulo($firstNum, $secondNum)
{
    return $firstNum % $secondNum;
}
//Возведение в степень
function exponentiation($firstNum, $secondNum)
{
    return $firstNum ** $secondNum;
}

echo "<br>Задание 5<br>";
function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation){
        case "Сложение":
            return addition($arg1, $arg2);
        case "Вычетание":
            return substraction($arg1, $arg2);
        case "Умножение":
            return multiplication($arg1, $arg2);
        case "Деление":
            return division($arg1, $arg2);
        case "Деление по модулю":
            return modulo($arg1, $arg2);
        case "Возведение в степень":
            return exponentiation($arg1, $arg2);
    }
}
echo "<br>";

echo "<br>Задание 6<br>";
function power($val, $pow)
{
    if ($pow === 0) {
        return 1;
    } elseif ($pow === 1){
        return $val;
    }
    return  $val * power($val, $pow - 1);
}

echo "<br>Задание 7<br>";
function getMoreValue($arg1, $arg2)
{
    if ($arg1 > $arg2){
        return $arg1;
    } elseif ($arg1 === $arg2){
        return 0;
    } else {
        return $arg2;
    }

}

$arg1 = 111;
$arg2 = 50;
//Проверка
if (($arg1 * $arg2) > 100 && ($arg1 * $arg2) < 1000){
    if (getMoreValue($arg1, $arg2) === $arg1){
        echo $arg1 - $arg2;
    } else {
        echo $arg2 - $arg1;
    }
} elseif (($arg1 * $arg2) > 1000){
    if (getMoreValue($arg1, $arg2) === $arg1){
        echo ($arg1 * $arg2) / $arg1;
    } else {
        echo ($arg1 * $arg2) / $arg2;
    }
}
