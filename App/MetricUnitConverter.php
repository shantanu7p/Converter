<? php
namespace ConverterApp;
class MetricUnitConverter
{
 public function converter($unit,$value)
 {
  $this->argumentValidator($value->$sourceValue);
  $calculatedPower = $unit->$sourceUnitPower - $unit->$convertedUnitPower;
  $finalPower = pow(10,$calculatedPower);
  $finalConvertedUnit = $finalPower * $value->sourceValue;
  $value->convertedValue = $finalConvertedUnit;
  }
 }
