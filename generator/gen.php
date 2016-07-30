<?php 

function tableGenerator($data){
	if (!is_object($data) && !is_array($data)) {
		return;
	}

	yield '<table>' . PHP_EOL;

	foreach ($data as $values) {
		$return = '<tr>' . PHP_EOL;

		foreach ($values as $value) {
			$return .= '<td>'. $value .'</td>' .PHP_EOL;
		}

		$return .= '</tr>' . PHP_EOL;

		yield $return;
	}

	yield '</table>' . PHP_EOL;
}

$table = tableGenerator([[1, 2, 3], [11, 22, 33], [111, 222, 333]]);

foreach ($table as $row) {
	echo $row;()
}