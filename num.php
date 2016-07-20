<?php 

$dec = 123;
echo "dec: " . $dec . PHP_EOL;

$bin = decbin($dec);
echo "bin: " . $bin . PHP_EOL;

$dec = bindec($bin);
echo "dec: " . $dec . PHP_EOL;

$oct = decoct($dec);
echo "oct: " . $oct . PHP_EOL;

$dec = octdec($oct);
echo "dec: " . $dec . PHP_EOL;

$hex = dechex($dec);
echo "hex: " . $hex . PHP_EOL;

$num = 1.25533;
echo round($num, 2) . PHP_EOL;

$num = 1.55533;
echo ceil($num) . PHP_EOL;

$num = 1.25533;
echo floor($num) . PHP_EOL;