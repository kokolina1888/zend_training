<?php 
//1
$b = ['a'=>1, 'c', 'd'];
$a = [1, 2, 3];

var_dump($b+$a);

//2
echo "22" + "0.2", 23 . 1 . PHP_EOL;
//3
$a = ['zero', 'one', 'two'];

foreach ($a as &$v) {
	var_dump($v); 
}
foreach ($a as $v) {
		
	}
print_r($a);