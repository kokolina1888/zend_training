<?php 

$a = "The quick brown fox jumped over the lazy dog";
$b = array_map('strtoupper', explode('', $a));
foreach ($b as $value) {
	print $value;
}