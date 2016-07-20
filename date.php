<?php 
echo date('Y-m-d') . PHP_EOL;
echo date('H:i:s') . PHP_EOL;
echo date('l') . PHP_EOL;
echo date('w') . PHP_EOL;
echo date('z') . PHP_EOL;
if (date('L')) {
	echo "Leap year"  . PHP_EOL;
} else {
	echo "not a leap year"  . PHP_EOL;
}
echo "Greenwich time " . gmdate('H:i:s') . PHP_EOL;

echo date('Y-m-01') . PHP_EOL;
echo date('Y-m-t') . PHP_EOL;
echo date('Y-m-01', strtotime("-1 month")) . PHP_EOL;
echo date('Y-m-t', strtotime("-1 month")) . PHP_EOL;
echo date('Y-m-01', strtotime("+1 month")) . PHP_EOL;
echo date('Y-m-t', strtotime("+1 month")) . PHP_EOL;
echo date('Y-m-d', strtotime("last monday")) . PHP_EOL;
echo date('Y-m-d', strtotime("next monday")) . PHP_EOL;

//comparison

$date_1 = date('Y-m-d');
$date_2 = date("2016-09-01");
$date_timestamp_1 = strtotime($date_1);
$date_timestamp_2 = strtotime($date_2);

if ($date_timestamp_1 < $date_timestamp_2) {
	echo "date 2 is forthcoming" . PHP_EOL;
}

//difference

$diff = $date_timestamp_1 - $date_timestamp_2;
$diff = abs($diff);

$days = $diff/(3600*24);

echo $days . PHP_EOL;

//time of script exec

$start_time = microtime(true);

for ($i=0; $i < 1; $i+=0.00001) 

$finish_time = microtime(true);
$result_time = $finish_time - $start_time;

printf('used %.4F sec', $result_time) . PHP_EOL;




