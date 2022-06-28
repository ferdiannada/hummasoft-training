<?php

class Laptop{

    public $ram = 4;
    public $layar = 14;
    public $projector = true;
    public $processor = "inter core i3";

    public function lihatFilm($value)
    {
        $this->layar = $value;
    }

    public function upRam($val)
    {
        $this->ram = $val;
    }

}
$lepi = new Laptop();

echo "RAM Baru : ".$lepi->upRam(8). "<br>";
echo "RAM Default : ".$lepi->ram. "<br>";

