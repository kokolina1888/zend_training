<?php 

$row = 1;
$file = fopen('text13.csv', 'r');
while (($data = fgetcsv($file, 1000, ',')) !== false) {
	
	$countPlace = count($data);
	var_dump($data);
	echo "$countPlace in row $row". PHP_EOL;	
	$row++;

	for ($i=0; $i <$countPlace; $i++) { 
		echo "$data[$i]".PHP_EOL;
	}
}
fclose($file);