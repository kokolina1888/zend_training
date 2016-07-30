<?php 

class Shape
{
    public static function getShape($type, $side)
    {
        switch($type) {
            case 'circle':
                return new Circle($side);
            case 'square':
                return new Square($side);
            default:
                return new stdClass();
        }
    }

    public function getType()
    {
        return get_class($this);
    }
}

class Circle {
	protected $radius = 0;

public function __construct($side){
	$this->radius = $side;
 }

 public function getArea() {
 	$area = pow($this->radius, 2)*3.14;
 	return $area;
 }
}

class Square{
protected $side = 0;

public function __construct($side){
	$this->side = $side;
 }

 public function getArea() {
 	return pow($this->side, 2);
 }
}