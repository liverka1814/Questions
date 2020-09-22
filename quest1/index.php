<?php

//Основы PHP
//Задание №1
//целое число
$i = 3;
echo $i;
echo "<br>";
//строка
$i = '3';
echo $i;
echo "<br>";
//дробное число
$i = 3.3;
echo $i;
echo "<br>";
//константа
const CONSTANT = 'КОНСТАНТА';
echo CONSTANT;
echo "<br>";
//число в восьмиричной системе счисления
$num8 = decoct(77);
echo $num8;
echo "<br>";
//число в шестнадцатеричной системе счисления
$num16 = dechex(15);
echo $num16;
echo "<br>";

//Задание №2
$int = 3;
//строка
$str = '3';
//дробное число
$double = 3.3;
//константа
const CONSTANT = 'КОНСТАНТА';
//число в восьмиричной системе счисления
$num8 = decoct(77); //можно было писать на прямую как 012
//число в шестнадцатеричной системе счисления
$num16 = dechex(15);
//В двойные кавычки поместил переменные
echo "int" . "<br>" . "$str" . "<br>" . "$double" . "<br>";
echo "CONSTANT" . "<br>" . "$num8" . "<br>" . "$num16";
//в одинарные кавычки поместил переменные
echo 'int' . "<br>" . '$str' . "<br>" . '$double' . "<br>";
echo 'CONSTANT' . "<br>" . '$num8' . "<br>" . '$num16';

//Задание №3
echo 010;
echo "<br>";
echo 011;
echo "<br>";
echo 012;
echo "<br>";
echo 013;
echo "<br>";
echo 014;
echo "<br>";
echo 015;
echo "<br>";
echo 016;
echo "<br>";
echo 017;
echo "<br>";
//echo 018;
//echo 019;
echo 020;
echo "<br>";
/*Выдает ошибку на строке 64, и 65 так как числа 8 и 9 в восьмиричной системе счисления раньше просто игнорировались, но с версии php 7 будет ошибка "Parse error"*/
//Задание №4
echo 0x0;
echo "<br>";
echo 0x1;
echo "<br>";
echo 0x2;
echo "<br>";
echo 0x3;
echo "<br>";
echo 0x4;
echo "<br>";
echo 0x5;
echo "<br>";
echo 0x6;
echo "<br>";
echo 0x7;
echo "<br>";
echo 0x8;
echo "<br>";
echo 0x9;
echo "<br>";
echo 0xA;
echo "<br>";
echo 0xB;
echo "<br>";
echo 0xC;
echo "<br>";
echo 0xD;
echo "<br>";
echo 0xF;
echo "<br>";

//Задание №5
echo "\"Я помню чудное мгновенье:<br>";
echo "Передо мной явилась ты,<br>";
echo "Как мимолетное виденье,<br>";
echo "Как гений чистой красоты.\"<br>";
echo "<i>А.С. Пушкин</i>";
echo "<br>";

//Задание №6
echo "\"Я помню чудное мгновенье:<br>Передо мной явилась ты,<br>Как мимолетное виденье,<br>Как гений чистой красоты.\"<br><i>А.С. Пушкин</i>";

//Задание №7
//echo 10 + "привет";
/*Генерирует ошибку о том что не может перевести значение к числу*/
echo "<br>";

//Задание №8
/*Оператор исключающее ИЛИ обозначается как XOR. Он возвращает значение true, если один и только один из операндов имеет значение true. Если оба операнда имеют значение true, оператор вернет значение false.*/
echo 'true xor true -> false
true xor false -> true
false xor false -> false
false xor true -> true';
//$a xor $a при любых значениях будет равно false

