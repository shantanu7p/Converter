<?php

namespace ConverterApp;

class MetricUnitConverter extends Converter
{
public function converter($currentUnit,$newUnit)
  { 
    $calculatedPower = $currentUnit->unit->power - $newUnit->unit->power;
    $finalPower = pow(10,$calculatedPower);
    $newUnit->value = $finalPower * $currentUnit->value;
    return $newUnit->value;
  }
}
