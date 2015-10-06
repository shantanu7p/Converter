<? php
namespace ConverterApp;
class Converter
{
   public function converter($object,$value)
    {
        $power = $object->$fromUnit - $object->$toUnit;
        $convertedValue = pow($value,$power);
        return $convertedValue;
    }
}
