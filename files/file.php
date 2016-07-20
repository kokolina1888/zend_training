<?php 
function getAndSaveFile($url, $path, $fileName = false){
	$file = @file_get_contents($url);
	if (!$file) return false;
	if(!$fileName) $fileName = basename($url);
	$resultSave = @file_put_contents($path . $fileName, $file);
	if ($resultSave || $resultSave > 0) return true;
	return false;
}

getAndSaveFile('http://localhost/zend_training/files/tmp/file_3.txt', './tmp1/');