<?php

namespace ConverterApp;

class Unit
{
    protected $longName;
    protected $shortName;

    public function getLongName()
    {
        return $this->longName;
    }
    public function setLongName($lName)
    {
        $this->longName = $lName;
    }

    public function getShortName()
    {
        return $this->newUnit;
    }
    public function setNewUnit($sName)
    {
        $this->shortName = $sName;
    }
}
