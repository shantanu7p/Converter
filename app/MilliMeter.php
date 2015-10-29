<?php

namespace ConverterApp;

class MilliMeter extends Length
{
    protected $power;
    public function __construct()
    {
        $this->power = -3;
        parent::__construct("MilliMeter", "MM");
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
