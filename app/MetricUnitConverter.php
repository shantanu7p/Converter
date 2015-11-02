<?php

namespace ConverterApp;

class MetricUnitConverter extends Converter
{
    public function converter($source, $destination)
    {
        $result;
        $calculatedCoefficient = $source->getUnit()->getPower() - $destination->getUnit()->getPower();
        $finalCoefficient = pow(10, $calculatedCoefficient);
        $result = $finalCoefficient * $source->getValue();
        $destination->setValue($result);
        return $destination->getValue();
    }
}
