<?php 
// $path = "D:/xampp/htdocs/zend_training/testdir/";
// $success = chdir($path);
// $num = 10;
// if ($num>1) {
// 	return $success;
// }

//echo "current directory " . getcwd();

mkdir('test2/test', 0666, true);
chdir('test2/test');
echo "current directory " . getcwd();