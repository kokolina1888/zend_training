<?php namespace Src;
class veggieSub extends Sub{
	
	public function addPrimaryToppings(){
		var_dump('adding the veggies');
		return $this;
	}

	
}