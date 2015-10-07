<? php
namespace ConverterApp;
class Converter
{
   public function converter($object,$targateUnit,$value)
    {
      $this->argumentValidator($value);
      $finalPower = $object->$power - $targateUnit;
      $convertedPower = pow(10,$finalPower);
      $finalConvertedUnit = $convertedPower * $value;
      return $finalConvertedUnit;
    }
}
