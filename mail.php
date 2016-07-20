<?php 

$strTo = 'kokolina18@abv.bg';
$subject = 'sub';
$message = "message";
$headers = "MIME-Version: 1.0\r\n";
$headers.= "Content-type: text/html; charset=utf-8\r\n";
$headers.="From: test mail <no-reply@test.com>";

$result = mail($strTo, $subject, $message, $headers);

if ($result) {
	echo "mail has been sent";
} else {
	echo "fail";
}
