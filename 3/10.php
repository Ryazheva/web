<?php

function sumMore10($number1, $number2): bool
{
    return ($number1 + $number2) > 10;
}
echo sumMore10(1,1), "\n";

function numbersEqual($number1, $number2): bool
{
    return $number1 == $number2;
}
echo numbersEqual(1,10), "\n";

$test = "0";
if ($test == 0) echo 'верно', "\n";

$age = 15;
if ($age < 10 or $age > 99)
{
    echo "Число меньше 10 или больше 99\n";
}
else
{
    $sum = array_sum(str_split((string)$age));

    if ($sum <= 9)
    {
        echo "Сумма цифр однозначна\n";
    }
    else
    {
        echo "Сумма цифр двузначна\n";
    }
}

$array = Array(4, 5, 6);
if (count($array) == 3) {
    echo array_sum($array);
}
