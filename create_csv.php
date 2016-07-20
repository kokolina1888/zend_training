<?php 
$data = array(
	array('str11 str12',
		'str21 str22',
		'str31 str32'),
	array('str111 str112',
		'str221 str222',
		'str331 str332'),
	array('str1111 str1112',
		'str2221 str2222',
		'str3331 str3332')
	);
$str = '';
foreach ($data as $value) {
	$str.= $value[0] .' ; '.$value[1] .' ; '.$value[2] . PHP_EOL;
}
$str = iconv('UTF-8', 'windows-1251', $str);
file_put_contents('text13.csv', $str);