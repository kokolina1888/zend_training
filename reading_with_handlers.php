<?php
$file = fopen('lorem_ipsum.txt', 'a+');
if ($file == false) {
	die('Unable to open/create file');
}

if (filesize('lorem_ipsum.txt') == 0) {
	$counter = 0;
} else {
	$counter = (int)fgets($file);
	$counter++;
}

//ftruncate($file, 0);

fwrite($file, $counter);
echo "there has been $counter hits to this site";