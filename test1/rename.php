<?php 

$file = 'file_1.txt';

$new_name = 'file_3.txt';

if (rename($file, $new_name)) {
	echo "renamed";
} else {
	echo "not renamed";
}