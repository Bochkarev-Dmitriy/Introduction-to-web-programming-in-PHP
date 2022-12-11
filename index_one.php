<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

echo "<b>Задача №1</b> - Есть 2 переменные. Проверить и вывести 
на экран, является ли значение первой переменной кратным значению 
второй (первое число кратно второму, если делится на него без остатка).
</br></br>";

        $firstVariable = 55;
        $secondVariable = 65;

        if ($firstVariable % $secondVariable == 0) 
        {
            echo "$firstVariable кратно $secondVariable <br>";
        }
        else 
        {
            echo "$firstVariable не кратно $secondVariable <br>";
        }

echo "</br><hr>";
echo "<b>Задача №2</b> - Вывести квадрат большего из двух чисел.
</br></br>";

        if ($firstVariable > $secondVariable) 
        {
            echo "Квадрат большего из двух чисел  $firstVariable равен: " . $firstVariable ** 2 . "<br>";
        }
        else if ($firstVariable < $secondVariable) 
        {
            echo "Квадрат большего из двух чисел $secondVariable равен: " . $secondVariable ** 2 . "<br>";
        }
        else 
        {
            echo "Высчитать квадрат не возможно, т.к. числа равны. <br>";
        }

echo "</br><hr>";
echo "<b>Задача №3</b> - Есть переменная, в ней сохранен номер месяца 
(в коде скрипта). Скрипт возвращает количество дней в этом месяце.
</br></br>";



        $month = 1;
        $year = 2023;

        echo "В текущем месяце, дней: " . date('t') . "<br>";
        echo "В следующем месяце, дней: " . date('t', time() + 3600 * 24 * 30 ) . "<br>";
        $number = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        echo "Месяц $month года $year содержит $number дней <br>";
        
echo "</br><hr>";
echo "<b>Задача №4</b> - Есть переменная, в ней (в скрипте) сохранен год. 
Проверить, является ли внесенный год високосным.
</br></br>";

        $year = 2023;
        if (cal_days_in_month(CAL_GREGORIAN, $month, $year) > 28) 
        {
            echo "Год $year високосный <br>";
        }
        else 
        {
            echo "Год $year не високосный <br>";
        }

        if (date("L")) 
        {
            echo "текущий год  високосный <br>";
        }
        else 
        {
            echo "текущий год не високосный <br>";
        }

        if (date("L", mktime(0,0,0,1,1,$year))) 
        {
            echo "$year год  високосный <br>";
        }
        else 
        {
            echo "$year год не високосный <br>";
        } 
        
        
echo "</br><hr>";
echo "<b>Задача №5</b> - Вывести сумму двух чисел, если они оба кратны 3, 
или вывести результат деления при условии, что второе число не равно нулю 
(если ноль, то выводится сообщение о некорректном вводе).
</br></br>";
        
        $firstVariable = 15;
        $secondVariable = 6;
        if ($secondVariable == 0) 
        {
            echo "Некорректные числа. Второе число равно 0 <br>";
        }
        else if (($firstVariable % 3 == 0) && ($secondVariable % 3 == 0)) 
        {
            echo "Сумма числе $firstVariable и $secondVariable равна: " . $firstVariable + $secondVariable . "<br>";
        }
        else 
        {
            echo "$firstVariable / $secondVariable = " . $a / $secondVariable . "<br>";
        }

echo "</br><hr>";

?>

</body>
</html>