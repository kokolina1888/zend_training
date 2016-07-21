<?php 
$src = 'jpeg-home.jpg';
$new_file = 'test_part1.jpg';
$x_pic = 100;
$y_pic = 100;
$width = 200;
$height = 200;

$img = imagecreatetruecolor($width, $height);
$pic = imagecreatefromjpeg($src);
imagecopy($img, $pic, 0, 0, $x_pic, $y_pic, $width, $height);
imagejpeg($img, $new_file);
imagedestroy($img);
imagedestroy($pic);