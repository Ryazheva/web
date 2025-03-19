<?php

$array = [1, 2, 3, 4];
$average = array_sum($array) / count($array);
echo $average, "\n";

$sum = array_sum(range(1,100));
echo $sum, "\n";

$arr_num = [1, 4, 9, 16];
$squareRoots = array_map('sqrt', $arr_num);
print_r($squareRoots);
echo "\n";

$letters = range('a', 'z');
$numbers = range(1, 26);
$array = array_combine($letters, $numbers);
print_r($array);
echo "\n";

$numbers = '1234567890';
$pairs = str_split($numbers, 2);
$sumPairs = array_sum($pairs);
echo $sumPairs;