<?php

class laptop{

    public $ram = 4;
    public $layar = 14;
    public $projector = true;
    public $processor = "inter core i3";

    public function lihatFilm($value)
    {
        $this->layar = $value;
    }

}