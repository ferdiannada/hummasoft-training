<?php

class Frog extends Animal
{
    public function __construct($val)
    {
        $this->name = $val;
    }

    public function setJump($val)
    {
        return "Uyeee";
    }

}