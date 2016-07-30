<?php 

class ClassOne {
	protected $a=10;
	public function changeValue($b){
		$this->a = $b;
	}
}

class ClassTwo extends ClassOne{
	protected $b = 10;

	public function changeValue($b){
		$this->b = 10;
		parent::changeValue($this->a + $this->b);
	}

	public function displayValues(){
		print "a: {$this->a}b: {$this->b}\n";
	}
}

$obj = new ClassTwo();

//$obj->changeValue(10);

$obj->changeValue(20);

$obj->displayValues();