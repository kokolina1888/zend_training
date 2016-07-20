<?php 

$phar = new Phar("build/app.phar", 0, "app.phar");
$phar->buildFromDirectory("./app");
$phar->setStub(
	$phar->createDefaultStub("cli/app.php", "public/index.php"));