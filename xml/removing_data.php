<?php 
$xml = <<<XML
<xml>
	<text type='misc'>some text here</text>
	<text type='misc'>some more text here</text>
	<text type='misc'>yet more text here</text>
</xml>
XML;

$dom = new DOMDocument();
$dom->loadXML($xml);

$xpath = new DomXpath($dom);

$res = $xpath->query('//text');
$res->item(0)->parentNode->removeChild(
	$res->item(0));
	$res->item(1)->removeAttribute('type');
	$res = $xpath->query('text()', $res->item(2));
	$res->item(0)->deleteData(0, $res->item(0)->length);

	echo $dom->saveXML();