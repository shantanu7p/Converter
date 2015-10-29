<?php

namespace ConverterApp;

class MetricUnitConverter extends Converter
{
    public function converter($currentUnit, $newUnit)
    {
        $result;
        $calculatedPower = $currentUnit->getUnit()->getPower() - $newUnit->getUnit()->getPower();
        $finalPower = pow(10, $calculatedPower);
        $result = $finalPower * $currentUnit->getValue();
        $newUnit->setValue($result);
        return $newUnit->getValue();
    }
}
