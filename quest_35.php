<?php 

$link = mysqli_connect('localhost', 'root', 'pswd');
if (!$link) {
	$error = mysqli_connect_error();
	die("my error: $error");
}