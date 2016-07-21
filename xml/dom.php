<?php 
$dom = new DOMDocument();
$dom->load('first_xml.xml');

$xpath = new DOMXPath($dom);

$xpath->registerNamespace('lib', 'http://example.org/library');
$res = $xpath->query('//lib:title/text()');

foreach ($res as $book) {
	echo $book->data;
}

$book=$dom->createElement('book');
$book->setAttribute("isbn", '111111111');

$title= $dom->createElement('title');
$text = $dom->createTextNode('Title11');

$title->appendChild($text);
$book->appendChild($title);

$author= $dom->createElement('author', 'Author11');
$book->appendChild($author);

$publisher= $dom->createElement('publisher', 'Publisher11');
$book->appendChild($publisher);

$dom->documentElement->appendChild($book);
echo PHP_EOL;

echo $dom->save('first_xml.xml');