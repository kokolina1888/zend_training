<?php 
$file_name = 'file.txt';
$file = fopen($file_name, 'r');

$str = "";

while (!feof($file)){
	$buffer = fgets($file, 1024);
	$str.= $buffer;
}

fclose($file);
echo "$str";