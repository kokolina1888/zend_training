<?php 
$file = 'lorem_ipsum.txt';

$strTo = 'kokolina18@abv.bg';
$from = "test@files.com";
$subject = 'sub_file';
$message = "message with attachement";
$separator = "----";
$headers = "MIME-Version: 1.0\r\n";
$headers.= "Content-type: text/html; charset=utf-8\r\n";
$headers.="From: $from\nReply-To: $from\n";
$headers.="Content-Type: multipart/mixed;"."boundary=\"$separator\"";

$bodyMail = "--$separator--\n";
$bodyMail .= "Content-Type: text/html;" . "charset=utf-8";
$bodyMail .= "Content-Transfer-Encoding: quoted_printable";
$bodyMail .= "Content-Disposition: attachement;" . "filename ==?utf-8?B?" . base64_encode(basename($file)) . "?\n";
$bodyMail .= "Content-Transfer-Encoding: base64\n";
$bodyMail .= "Content-Disposition: attachement;" . "filename ==?utf-8?B?" . base64_encode(basename($file)) . "?\n\n";

$contentFile = file_get_contents($file);
$bodyMail .=chunk_split(base64_encode($contentFile)) . "\n ";

$bodyMail .= "--".$separator."--";

$result = mail($strTo, $subject, $bodyMail, $headers);

if ($result) {
	echo "mail has been sent";
} else {
	echo "fail";
}
