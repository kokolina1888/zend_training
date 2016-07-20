<?php 

if (!file_exists('lorem_ipsum.txt')) {
	throw new Exception("The file doesn`t exist");
}

$file = fopen('lorem_ipsum.txt', "r");
$txt = '';
while(!feof($file)){
	$txt .= fread($file, 1); 
}

echo "$txt";