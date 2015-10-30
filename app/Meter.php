<?php

namespace ConverterApp;

class Meter extends Length
{
    protected $power;
    public function __construct()
    {
        $this->power = 0;
        parent::__construct("Meter", "M");
    }

    public function getPower()
    {
        return $this->power;
    }
    public function setPower($pow)
    {
        $this->power = $pow;
    }
}
