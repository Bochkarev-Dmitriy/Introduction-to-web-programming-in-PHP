<!-- Модуль 1. 
Введение в web-программирование на PHP
Тема: Циклы. Часть 1
Задача 1
Вывести N нечетных чисел (N записывается в переменной) и дополнительно:
a) посчитать их среднее значение;
b) вывести их в обратном порядке (от большего к меньшему).
Формат вывода: <span>-элемент; размер текста должен быть равен наибольшему 
числу, цвет текста — красный. -->

<?php
$numberDigits = 20;
$x = 1;
$digit = 1;
$summa = 0;
while ($x <= $numberDigits) 
{
    if ($digit % 2 !== 0) 
    {
        $odd[] = $digit;
        $x++;
        $summa += $digit;
    }
    $digit++;
}
$fontSize = max($odd);
foreach ($odd as $key => $value) 
{
    echo "<span style='font-size: " . $fontSize . "px; color:red;'> $value </span>";
}
echo "<h1>Среднее значение массива: " . $summa / $numberDigits ."</h1>";
foreach (array_reverse($odd) as $key => $value) 
{
    echo "<span style='font-size: " . $fontSize . "px; color:red;'> $value </span>";
}
?>


