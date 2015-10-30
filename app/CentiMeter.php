<?php

namespace ConverterApp;

class CentiMeter extends Length
{
    protected $power;
    public function __construct()
    {
        $this->power = -2;
        parent::__construct("CentiMeter", "CM");
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
