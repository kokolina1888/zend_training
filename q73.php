<?php 

function a($num){
	return (b($num)*$num);
}
function b(&$num){
	return ++$num;
}

echo a(5);