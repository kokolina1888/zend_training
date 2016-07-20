<?php 
$path = 'test1/';
$nameArc = 'test.zip';
$zip = new ZipArchive;

if ($zip->open($nameArc) === true) {
	$zip->extractTo($path);
	$zip->close();
	echo "Archive in ". $path;
} else {
	die('Error');
}