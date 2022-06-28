<?php

class Ape extends Animal
{

    protected $legs = 2;
    public function __construct($val)
    {
        $this->name = $val;
    }
    
    public function Yell()
    {
        return "AAAAAAA";
    }

    public function getLegs()
    {
        return $this->legs;
    }

    

}