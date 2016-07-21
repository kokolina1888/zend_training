<?php 

$sxml = simplexml_load_file('first_xml.xml');

$node = dom_import_simplexml($sxml);
$dom = new DomDocument();

$dom->importNode($node, true);
$dom->appendChild($node);

echo $dom->saveXML();