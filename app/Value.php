<?php

namespace ConverterApp;

class Value
{
    protected $value;
    protected $unit;

    public function getValue()
    {
        return $this->value;
    }
    public function setValue($nvalue)
    {
        $this->value = $nvalue;
    }

    public function getUnit()
    {
        return $this->unit;
    }
    public function setUnit($nunit)
    {
        $this->unit = $nunit;
    }
}
