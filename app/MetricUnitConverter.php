<?php

namespace ConverterApp;

class MetricUnitConverter extends Converter
{
  public function converter($currentUnit, $newUnit)
  {
    //$obj1 = $currentUnit->unit;
    //$obj2 = $newUnit->unit;
    $calculatedPower = $currentUnit->unit->power - $newUnit->unit->power;
    $finalPower = pow(10, $calculatedPower);
    $newUnit->value = $finalPower * $currentUnit->value;
    return $newUnit->value;
  }
}
