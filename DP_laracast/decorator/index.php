<?php 
interface CarServicce{
	public function getCost();

	public function getDescription();
}

class BasicInspection implements CarServicce{
	public function getCost(){
		return 19;
	}

	public function getDescription(){
		return 'Basic inspection';
	}
}

class oilChange implements CarServicce{

	protected $carservice;

	public function __construct(CarServicce $carservice){
		$this->carservice = $carservice;
	}
	public function getCost(){
		return 20 + $this->carservice->getCost();
	}

	public function getDescription(){
		return $this->carservice->getDescription() . ', and oil change';
	}
}
class TireRotation implements CarServicce{

	protected $carservice;

	public function __construct(CarServicce $carservice){
		$this->carservice = $carservice;
	}
	public function getCost(){
		return 30 + $this->carservice->getCost();
	}

	public function getDescription(){
		return $this->carservice->getDescription() . ', and tire rotation';
	}
}
echo (new TireRotation(new BasicInspection))->getCost();
echo (new TireRotation(new oilChange(new BasicInspection)))->getDescription();