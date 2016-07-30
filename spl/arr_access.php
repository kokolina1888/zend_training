<?php 

// interface ArrayAccess 
// {
// 	function offsetSet($offset, $value);
// 	function offsetGet($offset);
// 	function offsetUnset($offset);
// 	function offsetExists($offset);
// }

class myArray implements ArrayAccess {
	protected $array = array();

	function offsetSet($offset, $value){
		if (!is_numeric($offset)) {
			throw new Exception("invalid kew $offset");
		}
		$this->array[$offset] = $value;
	}

	function offsetGet($offset){
		return $this->array[$offset];
	}

	function offsetUnset($offset){
		unset ($this->array[$offset]);
	}

	function offsetExists($offset){
		return array_key_exists($this->array, $offset);
	}
}

$obj = new myArray();
$obj[1] = 2;
//$obj['a'] = 1;