<?php 
namespace Src;

abstract class Sub {

	public function make(){
		return $this
		->layBread()
		->addLettuce()
		->addPrimaryToppings()
		->addSauces();
	}

	public function layBread(){
		var_dump('laying down the bread');
		return $this;
	}

	public function addLettuce(){
		var_dump('adding lettuce');
		return $this;
	}

	public function addSauces(){
		var_dump('adding the sauces');
		return $this;
	}

protected abstract function addPrimaryToppings();
}