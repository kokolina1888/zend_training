<?php 

class Greeter{

	public function getClosure(){
		return function(){
			echo $this->hello;
			$this->world();
		};
	}
}

class WorldGreeter
{
	public $hello = "Hello";
	private function world(){ echo 'World';}
}

$greeter = new Greeter();
$closure = $greeter -> getClosure();
$worldGreeter = new WorldGreeter();

$newClosure = Closure::bind($closure, $worldGreeter, 'WorldGreeter');
$newClosure();