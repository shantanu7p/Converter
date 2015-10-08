<? php
namespace ConverterApp;
class ImperialUnitConverter
{
 public function converter($object,$value)
 {
  $this->argumentValidator($value);
  switch($object->type)
  {
   case "YardToMeter":
         $convertedValue = $value * 0.9144;
         return $convertedValue;
    	   break;
   case "MeterToYard":
         $convertedValue = $value * 1.09361;
         return $convertedValue;
         break;
   case "YardToKiloMeter":
         $convertedValue = $value * 0.0009144;
         return $convertedValue; 
         break; 
   case "KiloMeterToYard":
         $convertedValue = $value * 1093.61;
         return $convertedValue;  
         break;
   case "PoundToKiloGram":
         $KiloGram = $unit * 0.453592;
         return $kiloGram;
         break;
   case "KiloGramToPound":
         $pound = $unit / 0.453592;
         return $pound;
         break;
   case "PoundToGram":
         $KiloGram = $unit * 453.592;
         return $kiloGram;
         break;
   case "GramToPound":
         $pound = $unit / 453.592;
         return $pound;
   case "FahrenheitToCelsius":
         $Celsius = (5/9)*($unit - 32);
         return $Celsius;
         break;
   case "CelsiusToFahrenheit":
         $Fahrenhit = ($unit*9/5) + 32;
         return $Fahrenhit;
         break;
   case "KelvinToCelsius":
         $Celsius = $unit - 273.15;
         return $Celsius;
         break;
   case "CelsiusToKelvin":
         $Kelvin = $unit + 273.15;
         return $Kelvin;
         break;
   default :

       }
    }
 }
 
