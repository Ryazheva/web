<?php

$pattern = "/v...v/";
$string = "av123v vbcaV vdfgv vaaa vbbbv Vabcv";

preg_match_all($pattern, $string, $matches);

echo "Результат для шаблона '/v...v/': ";
print_r($matches[0]);

