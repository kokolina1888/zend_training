<?php 

$keys = [1, 2, 'a', 'b'];
$vals = [2, 2, 2, 2];

$arr_com = array_combine($keys, $vals);
print_r($arr_com);

$arr_mer = array_merge($keys, $vals);
print_r($arr_mer);

$arr_dif = array_diff($vals, $keys);
print_r($arr_dif);

$arr_int = array_intersect($keys, $vals);
print_r($arr_int);


