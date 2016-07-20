<?php 
//header('Content-Type: image/jpeg');
//readfile('jpeg-home.jpeg');

// 
// header('Content-Type: text/plain');
// $f = file('lorem_ipsum.txt');
// foreach ($f as $row) {
	// echo "<p>$row</p>";
// }

// $data = 'My Data';
// file_put_contents('lorem_ipsum.txt', $data, FILE_APPEND);

$data = ['data1', 'data2', 'data3'];
file_put_contents('lorem_ipsum.txt', $data, FILE_APPEND);

