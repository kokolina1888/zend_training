<?php 

function byReference(&$var = 7){
	echo ++$var;
}

byReference();