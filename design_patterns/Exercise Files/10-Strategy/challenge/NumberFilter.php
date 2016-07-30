<?php 
class NumberFilter
{
    protected $strategy = null;

    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    public function filter($number)
    {
        $this->strategy->filter($number);
    }
}

// class EvenStrategy
// {
//     public function filter($number)
//     {
//         if (0 == $number % 2) {
//             echo $number . "\n";
//         }
//     }
// }

class OddStrategy
{
    public function filter($number)
    {
        if (1 == $number % 2) {
            echo $number . "\n";
        }
    }
}