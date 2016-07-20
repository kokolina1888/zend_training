<?php 

$fileName = 'file_2.txt';

var_dump(getFormat($fileName));

function getFormat($var){
	$info = pathinfo($var);
	return $info;
}