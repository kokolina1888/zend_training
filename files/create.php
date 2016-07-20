<?php 

$file_name ='file_1.txt';
$file = fopen($file_name, 'a+');
$text = 'text';
fwrite($file, $text);
fclose($file); 
if ($file) {
	echo "success";
}