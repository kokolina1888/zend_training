<?php 

$value = 10;
$val['val']=10;
echo $a = "Value: {$value}";
echo "<br>";
echo $a = 'Value: $value';
echo "<br>";
echo $a = "Value: $value";
echo "<br>";
echo $a = "Value: {$val['val']}";

$a = "Value: {$value->getValue()}";
