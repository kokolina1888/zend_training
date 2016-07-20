<?php 

$file_name = 'file.txt';
if (is_readable(($file_name))) {
	$result = unlink($file_name);


	if ($result) {
		echo "deleted";
	} else {
		echo "not deleted";
	} 
} else {
	echo "file not existant";
}