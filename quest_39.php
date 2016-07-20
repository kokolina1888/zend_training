<?php 
$array = array('a'=>'John',
				'b'=>'Cog',
				'c'=>array('d'=>'John',
							'e'=>'Smith'));
function smth($array){
	extract($array);
	return $a;
}
print smth($array);