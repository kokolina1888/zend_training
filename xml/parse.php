<?php 
// $xmlstr = file_get_contents("first_xml.xml");
// $lib = simplexml_load_string($xmlstr);

// $lib = simplexml_load_file("first_xml.xml");

$lib = new SimpleXMLElement("first_xml.xml", NULL, true);

// foreach ($lib as $book) {
// 	echo $book['isbn'] . PHP_EOL;
// 	echo $book->title . PHP_EOL;
// 	echo $book->author . PHP_EOL;
// 	echo $book->publisher . PHP_EOL;
// }

// foreach ($lib as $child) {
// 	echo $child->getName() . PHP_EOL;
// 	foreach ($child->attributes() as $attr) {
// 		echo $attr->getName().":" .$attr. PHP_EOL;
// 	}
// 	foreach ($child->children() as $subchild) {
// 		echo $subchild->getName() . PHP_EOL;
// 	}
// 	echo PHP_EOL;
// }

// $res = $lib->xpath('/library/book/title');
// foreach ($res as $title) {
// 	echo $title . PHP_EOL;
// }

// $res1 = $lib->book[0]->xpath('title');
// foreach ($res1 as $title) {
// 	echo "$title";
// }

$book = $lib->addChild('book');
$book->addAttribute('isbn', '00000000');
$book->addChild('title', 'title0');
$book->addChild('author', 'author0');
$book->addChild('publisher', 'publisher0');

$lib->book[0]=NULL;

header('Content-type: text/xml');
echo $lib->asXML();