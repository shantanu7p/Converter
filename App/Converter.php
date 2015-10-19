<? php

namespace ConverterApp;

class Converter
{
  public function converter($initialUnitObject,$conversionUnitObject)
  {
    $calculatedPower = $initialUnitObject->$unit->$power - $conversionUnitObject->$unit->$power;
    $finalPower = pow(10,$calculatedPower);
    $conversionUnitObject->value = $finalPower * $initialUnitObject->value;
  }
}
