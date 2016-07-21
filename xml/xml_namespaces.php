<?php 

$dom = new DomDocument();
$node = $dom->createElement("nsl:somenode");

$node->setAttribute('ns1:someone', 'somevalue');

$node2 = $dom->createElement('ns3:anothernode');

$node->appendChild($node2);

$node->setAttribute('xmlns:ns1', 'http://example.org/ns1');
$node->setAttribute('xmlns:ns2', 'http://example.org/ns2');
$node->setAttribute('xmlns:ns3', 'http://example.org/ns3');

$dom->appendChild($node);
$dom->formatOutput = true;


echo $dom->saveXML();