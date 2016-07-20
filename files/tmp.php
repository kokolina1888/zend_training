<?php 

$folderPath = "tmp";
$count = 0;

if(is_dir($folderPath)){
	if ($dir = opendir($folderPath)) {
		while(($file = readdir($dir))!==false){
			if ($file !='.' && $file!="..") {
				if (unlink($folderPath.'/'.$file)) {
					echo "$file removed".PHP_EOL;
					$count++;
				}
			}
		}
		closedir($dir);
	}
}
echo "$count files removed";