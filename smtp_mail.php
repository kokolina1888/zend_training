<?php 
$smtp_username = 'username@yandex.ru';
$smtp_password = 'pswd';
$smtp_post = 'ssl://smtp.yandex.ru';
$smtp_port = 465;

$subject = "theme";
$message = 'message';
$mailTo = "zhenikipatov@yandex.ru";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text\html " . "charset=utf-8\r\n";
$headers .= "From: Evg <admin@vk-book.ru>r\n";

$contentMail = "Date: " . date("D, d M Y H:i:s") . " UT\r\n";
$contentMail .= "Subject: =?UTF-8?B" . base64_encode($subject) . " =?=\r\n";
$contentMail .= $headers . "\r\n";
$contentMail .= $message . "\r\n";

if (!$socket = @fsockopen($smtp_host, $smtp_post, $errorNumber, $errorDescription, 30)) {
	die($errorNumber . " . " . $errorDescription);
}

if (!parseSocketAnswer($socket, "220")) {
	die('Error connected');
}

$server_name = $_SERVER['SERVER_NAME'];
fputs($socket, "HELO $server_name\r\n");

if (!parseSocketAnswer($socket, "250")) {
	fclose($socket);
	die('Error greeting');
}

fputs($socket, "AUTH LOGIN\r\n");

if (!parseSocketAnswer($socket, "334")) {
	fclose();
	die("Error Authorisation");
}

fputs($socket, base64_encode($smtp_username) . "\r\n");

if (!parseSocketAnswer($socket, "334")) {
	fclose($socket);
	die("Error Authorisation");
}

fputs($socket, base64_encode($smtp_password) . "\r\n");
if (!parseSocketAnswer($socket, "235")) {
	fclose($socket);
	die("Auth Error");
}

fputs($socket, "MAIL FROM: <". $smtp_username .">\r\n");
if (!parseSocketAnswer($socket, "250")) {
	fclose($socket);
	die("Sender Error");
}

fputs($socket, "RCPT TO: <" . $mailTo . ">\r\n");
if (!parseSocketAnswer($socket, "235")) {
	fclose($socket);
	die("Receptor Error");
}

fputs($socket, "DATA\r\n");
if (!parseSocketAnswer($socket, "354")) {
	fclose($socket);
	die("Data transfer Error");
}
fputs($socket, $contentMail . "\r\n");
if (!parseSocketAnswer($socket, "250")) {
	fclose($socket);
	die("Error data mail transfer");
}

fputs($socket, "QUIT\r\n");
fclose($socket);

echo "success";

function parseSocketAnswer($socket, $response){
	while($substr($respondServer, 3, 1) != " "){
		if (!($responseServer = fgets($socket, 256))) {
			return false;
		}
		if (!substr($responseServer, 0, 3) == $response) {
			return false;
		}
		return true;
	}
}