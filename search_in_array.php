<?php 

$arr = [1, 2, 3, 4, 'a', 'b', 'c', 3, '4', '1'];

$val = 4;
$index = 2;


$result = in_array($val, $arr);
var_dump($result);
echo $result . PHP_EOL;

$result = array_key_exists($index, $arr);
var_dump($result);
echo $result . PHP_EOL;

$result = array_search($val, $arr);
var_dump($result);
echo 'key - ' . $result . PHP_EOL;