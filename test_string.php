<?php 
//1
$str = 'някакакъв текст';
$lit = ['а', 'к'];

$str = str_replace($lit, '', $str);
echo $str . PHP_EOL;

//2
$str = 'някакакъв текст text text';
$sub_1 = mb_substr($str, 2, 3, 'utf-8');
echo $sub_1 . PHP_EOL;

//3

$sub_2 = mb_substr($str, 1, -3, 'utf-8');
echo $sub_2 . PHP_EOL;

//4

$sub_3 = mb_substr($str, -4, 2, 'utf-8');
echo $sub_3 . PHP_EOL;

//5

$array = array();
$tok = strtok($str, " \t\n");
var_dump($tok);
var_dump($str);

while ($tok) {
	$array[] = $tok;
	$tok = strtok(" \t\n");
}
var_dump($array);

//6
$array_1 = explode(' ', $str);


//7
$string = "Текст4 с 4исла5 и бук5ви";
$array_2 = preg_split('/\d/', $string);

var_dump($array_2);

//8
$str = "Some text TEXT";
$str_tolower = strtolower($str);
echo $str_tolower . PHP_EOL;

$uc_first = ucfirst($str);
echo $uc_first . PHP_EOL;

$uc_words = ucwords($str);
echo $uc_words . PHP_EOL;

$mb_str = "ХГТСннтеакъгтт Двяъзд";
$mb_tolower = mb_strtolower($mb_str);
echo $mb_tolower . PHP_EOL;

$str = mb_convert_case($str, MB_CASE_UPPER, 'utf-8');
echo $str . PHP_EOL;

$str = mb_convert_case($str, MB_CASE_LOWER, 'utf-8');
echo $str . PHP_EOL;

$str = mb_convert_case($str, MB_CASE_TITLE, 'utf-8');
echo $str . PHP_EOL;

//9
$str = "Poopie";
$mb_strev = "";
$len = mb_strlen($str, 'utf-8');
echo $len . PHP_EOL;
echo $str[5];
for($i = $len; $i>=0; $i-- ){
	$mb_strev .= mb_substr($str, $i, 1, 'utf-8');
}
$len = mb_strlen($str, 'utf-8');
echo $len . PHP_EOL;


echo "str rev: " . $mb_strev . PHP_EOL;

//10

$str = "tester tester the faster";
$limit = 15;
$result = '';
if (mb_strlen($str, 'utf-8')>($limit+3)) {
	$sub_str = mb_substr($str, 0, $limit, 'utf-8');
	$result = trim($sub_str) . '...';

} else {
	$result = $str;
}

echo $result;