<?php 
$attach = ['/jpeg-home.jpg', '/images.jpg'];
$text = '
<div style="width: 700px; margin: 0 auto;">
	<h1>mail with image</h1>
	<h2>centered block</h2>
	<p>
		<img style="float: left" src="cid:jpeg-home.jpg" alt="">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure dolore repellendus cum accusamus fficia, consequuntur ut magnam delectus deserunt enim vitae dolorem quisquam, inventore ullam odit aliquam, quo corrupti labore!
	</p>
	<p>
		<img style="float: left" src="cid:images.jpg" alt="">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure dolore repellendus cum accusamus fficia, consequuntur ut magnam delectus deserunt enim vitae dolorem quisquam, inventore ullam odit aliquam, quo corrupti labore!
	</p>
</div>
';
$from = 'kokolina1888@gmail.com';
$to = 'kokolina18@abv.bg';
$subject = 'subject';
$headers = "From: $from\r\n";
$headers .= "To: $to\r\n";
$headers .= "date:" . date('r') . "\r\n";
$headers .= "X-Mailer: zm php script\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/alternative; \r\n";
$baseboundary = "--------------" . md5(microtime());
$headers .= " boundary= \"$baseboundary\"\r\n";

$message = "--$baseboundary\r\n";
$message .= "Content-Type: text/plain;\r\n";
$message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$message = "--$baseboundary\r\n";
$newboundary = "-----------" . md5(microtime());
$message .= "Content-Type: multipart/related;\r\n";
$message .= " boundary=\"$newboundary\"\r\n\r\n\r\n";
$message .= " --$newboundary\r\n";
$message .= "Content-Type: text/html;\r\n" . "charset=utf-8\r\n";
$message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$message .= $text . "\r\n\r\n";

foreach ($attach as $filename) {
	$mimetype = 'image/jpg';
	$fileContent = file_get_contents($filename, true);
	$filename = basename($filename);
	$message .= " --$newboundary\r\n";
	$message .= "Content-Type: $mimetype\r\n";
	$message .= "name=\"$filename\"\r\n";
	$message .= "Content-Transfer-Encoding: base64\r\n\r\n";
	$message .= "Content-ID: <$filename>\r\n";
	$message .= "Content-Disposition: inline\r\n";
	$message .= " filename = \"$filename\"\r\n";
	$message .= chunk_split(base64_encode($fileContent));

}
	$message .= " --$newboundary\r\n";
	$message .= " --$baseboundary\r\n";

$result = mail($to, $subject, $message, $headers);
if ($result) {
	echo "message has been sent";
} else {
	echo "fail";
}







