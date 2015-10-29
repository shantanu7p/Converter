<?php

namespace ConverterApp;

class Converter
{
    protected $currentUnit;
    protected $newUnit;

    public function getCurUnit()
    {
        return $this->currentUnit;
    }
    public function setCurUnit($cUnit)
    {
        $this->currentUnit = $cUnit;
    }

    public function getNewUnit()
    {
        return $this->newUnit;
    }
    public function setNewUnit($nUnit)
    {
        $this->newUnit = $nUnit;
    }
}
