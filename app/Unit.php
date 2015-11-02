<?php

namespace ConverterApp;

class Unit
{
    protected $longName;
    protected $shortName;

    public function __construct($longName, $shortName)
    {
        $this->longName = $longName;
        $this->shortName = $shortName;
    }

    public function getLongName()
    {
        return $this->longName;
    }
    public function setLongName($longName)
    {
        $this->longName = $longName;
    }

    public function getShortName()
    {
        return $this->newUnit;
    }
    public function setNewUnit($shortName)
    {
        $this->shortName = $shortName;
    }
}
