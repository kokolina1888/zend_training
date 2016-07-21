<?php 
$width = 200;
$height = 200;
$img = imagecreatetruecolor($width, $height);
$rgb = 0x00ff00;
imagefill($img, 0, 0, $rgb);
header("Content-type: image/jpeg");
imagejpeg($img);
imagedestroy($img);
imagedestroy($pic);