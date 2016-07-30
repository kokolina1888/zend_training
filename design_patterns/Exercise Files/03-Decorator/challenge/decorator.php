<?php 
class Decorator
{
    public $sentence = null;

    
    public function lower()
    {
        return $this->sentence = strtolower($this->sentence);
    }

    public function uppercase()
    {
        return $this->sentence = strtoupper($this->sentence);        
    }
}