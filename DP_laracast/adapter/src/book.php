<?php 
interface BookInterface{
	public function open();

	public function turnPage();
}

class Book implements BookInterface{
	public function open(){
		var_dump('opening the paper book');
	}

	public function turnPage(){
		var_dump('turning the page of the paper book');
	}
}

interface eReader{
	public function TurnOn();

	public function pressNextButton();
}
class Kindle implements eReader{
	public function TurnOn(){

		var_dump('turn the kindle on');

	}

	public function pressNextButton(){
		var_dump('pressinf the kindle next button');

	}
}

class KindleAdapter implements BookInterface{
	private $kindle;

	public function __construct(Kindle $kindle){
		$this->kindle = $kindle;
	}

	public function open(){
		return $this->kindle->TurnOn();
	}

	public function turnPage(){
		return $this->kindle->pressNextButton();
	}

}