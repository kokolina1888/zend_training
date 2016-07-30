<?php 

function createGreeting(&$who){
	return function() use(&$who){
		echo "Hello, $who";
		$who = null;
	};
}

$who = "World";
$greeter = createGreeting($who);
$greeter();
var_dump($who);