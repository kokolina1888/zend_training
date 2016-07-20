<?php 
$f = fopen('file.csv', 'a+');
$i = 0;
while ($row = fgetcsv($f)) {
	echo "<p>$i - ";
	foreach ($row as $val) {
		
		echo $val . " - ";
	}
	echo "</p>";
	$i++;

}

$values = ['val1', 'val2', 'val3'];

fputcsv($f, $values);
fclose($f);
