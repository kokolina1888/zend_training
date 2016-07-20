<?php 

$file_o = 'file_1.txt';
$file_c = 'file_2.txt';

if (copy($file_o, $file_c)) {
	echo "copied";
} else {
	echo "not copied";
}