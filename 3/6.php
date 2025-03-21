<?php

# Работа с %
$a = 10;
$b = 3;
echo $a % $b, "\n";

if ($a % $b == 0) {
    echo "Делится ", $a / $b, "\n";
}
else {
    echo "Делится с остатком ", $a % $b, "\n";
}

# Работа со степенью и корнем
$st = pow(2, 10);
echo $st, "\n";

$sqrtNumber = sqrt(245);
echo $sqrtNumber, "\n";

$array = Array(4, 2, 5, 19, 13, 0, 10);
$sumSquares = 0;
foreach ($array as $number) {
    $sumSquares += $number * $number;
}
print_r($sumSquares);
echo "\n";

# Работа с функциями округления
$sqrt379 = sqrt(379);

$s0 = round($sqrt379);
$s1 = round($sqrt379, 1);
$s2 = round($sqrt379, 2);
echo $s0, "\n", $s1, "\n", $s2, "\n";

$sqrt587 = sqrt(587);
$array = ['floor' => floor($sqrt587), 'ceil' => ceil($sqrt587)];
print_r($array);
echo "\n";

# Работа с min и max
$array = Array(4, -2, 5, 19, -130, 0, 10);
$minNumber = min($array);
$maxNumber = max($array);
echo $minNumber, "\n", $maxNumber, "\n";

# Работа с рандомом
echo rand(1, 100), "\n";

$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[$i] = rand(1, 100);
}
print_r($array);
echo "\n";

# Работа с модулем
$a = 5;
$b = 4;
echo '|a - b| = ', abs($a - $b), "\n";

$array = Array(1, 2, -1, -2, 3, -3);
$array_new = array_map('abs', $array);
print_r($array_new);
echo "\n";

# Общее
$num = 30;

$arrayDivisor = [];
for ($d = 1; $d <= $num/2; $d++) {
    if ($num % $d == 0) {
        $arrayDivisor[] = $d;
    }
}

$arrayDivisor[] = intval($num);
print_r($arrayDivisor);
echo "\n";

$array = Array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$sum = 0;
$count = 0;
foreach ($array as $number) {
    if ($sum <= 10) {
        $sum += $number;
        $count++;
    }
}
echo $count;
