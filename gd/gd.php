<?php 
if (isset_GD()) {
	echo "loaded";
} else {
	echo "NO GD";
}

function isset_GD(){
	if (!extension_loaded('gd')) {
		if (!dl('gd.so')) {
			return false;
		}
	}
	return true;
}