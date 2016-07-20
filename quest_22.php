<?php 

function myfunction(){
	list($string) = func_get_args();
	print($string);

}
myfunction("Hello, World!");