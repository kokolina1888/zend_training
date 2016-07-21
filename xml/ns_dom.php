<?php 

$dom = new DOMDocument();

$node = $dom->createElementNS('http://example.org/ns1', 'ns1:somenode');

$node->setAttributeNS('http://example.org/ns1', 'ns2:someattribute', 'somevalue');

$node2 = $dom->createElementNS('http://example.org/ns3', 'ns3:anothernode');
$node3 = $dom->createElementNS('http://example.org/ns1', 'ns1:anothernode');

$dom ->appendChild($node2);
$dom->appendChild($node3);
$dom->appendChild($node);

$dom->formatOutput = true;

echo $dom->saveXML();