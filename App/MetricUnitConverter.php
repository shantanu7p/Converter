<? php
namespace ConverterApp;
class MetricUnitConverter
{
 public function converter($object,$targateUnit,$value)
 {
  $this->argumentValidator($value);
  $CalculatedPower = $object->$power - $targateUnit;
  $convertedPower = pow(10,$CalculatedPower);
  $finalConvertedUnit = $convertedPower * $value;
  return $finalConvertedUnit;
  }
 }
