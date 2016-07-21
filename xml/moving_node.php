<?php 
$xml = <<<XML
<xml>
	<book>some text here</book>
	<book>some1 text here</book>
</xml>
XML;
$dom = new DOMDocument();
$dom->loadXML($xml);

$xpath = new DOMXPath($dom);
//$xpath->registerNamespace('lib', 'http://example.org/library');

$res = $xpath->query('//book');

$res->item(1)->parentNode->insertBefore($res->item(1), $res->item(0));

echo $dom->saveXML();

// $xml = <<<XML
// <xml>
// 	<text>some text here</text>
// </xml>
// XML;

// $dom = new DOMDocument();
// $dom->loadXML($xml);

// $xpath = new DomXpath($dom);

// $node = $xpath->query('//text/text()')->item(0);
// $node->data = ucwords($node->data);

// echo $dom->saveXML();