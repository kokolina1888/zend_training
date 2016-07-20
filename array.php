<?php 
$arr = [];
$stack = ['one','two'];
array_unshift($arr, $stack);
array_unshift($arr, '$stack');
array_unshift($arr, '$stack1');
$arr[] = 'stack3';
var_dump($arr);

$arr = [1, 2, 3, 4, 'a', 'b', 'c', 3, '4', '1'];
$arr_u = array_unique($arr);
print_r($arr_u).PHP_EOL;

$arr_un = array_unique($arr, SORT_NUMERIC);
print_r($arr_un).PHP_EOL;

$arr_us = array_unique($arr, SORT_STRING);
print_r($arr_us).PHP_EOL;

