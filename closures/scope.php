<?php 
function createGreeting($who){
	return function() use($who){
		echo "Hello $who";
	};
}

$greeter = createGreeting("World");
$greeter();