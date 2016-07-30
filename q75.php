<?php 
$a = array(
	1=>'red',
	'green',
	'blue',
	'purple'=>array(
		'house'=>'dog',
		'food'=>'meal',
		'here'=>'gone',
		'hello'=>array(
			5=>'goodbye',
			8=>'something',
			'correct')));
print $a['purple']['hello'][9];