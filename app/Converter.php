<?php

namespace ConverterApp;

class Converter
{
    protected $currentUnit;
    protected $newUnit;

    public function getCurrentUnit()
    {
        return $this->currentUnit;
    }
    public function setCurrentUnit($currentUnit)
    {
        $this->currentUnit = $currentUnit;
    }

    public function getNewUnit()
    {
        return $this->newUnit;
    }
    public function setNewUnit($newUnit)
    {
        $this->newUnit = $nUnit;
    }
}
