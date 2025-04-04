<?php
$str = 'a12b23c34d45';
$result = preg_replace_callback("/[0-9]+/", function($matches) {
    return array_product(str_split($matches[0]));
}, $str);

echo $result;