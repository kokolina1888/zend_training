<?php 
$file = new SimpleXMLElement('file.xml', NULL, true);

$res = $file->body->p->a['href'];
echo $res;