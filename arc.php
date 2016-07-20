<?php 
$pathdir = 'files/';
$nameArc = 'test.zip';
$zip = new zipArchive;

if($zip->open($nameArc, ZipArchive::CREATE) === true){
	$dir = opendir($pathdir);
	while ($file = readdir($dir)) {
		if (is_file($pathdir.$file)) {
			$zip->addFile($pathdir.$file, $file);
			echo $pathdir.$file . " archived <br>";
		} 
	}
	$zip->close();
	echo "success";
} else {
	die ('Error');
}