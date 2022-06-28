<?php

class Animal{

    protected $legs = 4;
    protected $cold_blooded = true;
    protected $name;
    public function __construct($val)
    {
        $this->name = $val;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function getColdBold($bool = false)
    {
        if ($this->cold_blooded == $bool) {
            return "Yes";
        }else{
            return "No";
        }
    }

    
}
