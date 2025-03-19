<?php

function increaseEnthusiasm($str): string
{
    return $str . "!";
}
echo increaseEnthusiasm("Hello") . "\n";

function repeatThreeTimes($str): string
{
    return $str . $str . $str;
}
echo repeatThreeTimes("Hello, world") . "\n";
echo increaseEnthusiasm(repeatThreeTimes("Hello, php")) . "\n";

function cut($str, $length = 10): string
{
    return substr($str, 0, $length);
}

echo cut("qwertyuiopasdfghjkl") . "\n";

$array = [1, 2, 3, 4, 5];
function printArrayRecursively($array, $index = 0)
{
    if ($index < count($array))
    {
        echo $array[$index] . " ";
        printArrayRecursively($array, $index + 1);
    }
}

printArrayRecursively($array);
echo "\n";

function sumDigitsNumberRecursively(int $number): int
{
        $number = abs($number);

        while ($number > 9)
        {
            $number = array_sum(str_split((string) $number));
        }
        return $number;
    }

echo sumDigitsNumberRecursively(456) . "\n";