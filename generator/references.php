<?php 

class DataModel {
	protected $data = [];
	function &getIterator(){
		foreach ($this->data as $key => $value) {
			yield $key=>$value;
		}
	}
}

foreach ($dm->getIterator() as $key => &$value) {
	$value = strtoupper($value);
}