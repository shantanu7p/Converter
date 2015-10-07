<? php
namespace ConverterApp;
class Temperature extends Imperial
{
  public function convertFahrenheitToCelsius($unit)
  {
    $this->argumentValidator($unit);
    $Celsius = (5/9)*($unit - 32);
    return $Celsius;
  }

  public function convertCelsiusToFahrenheit($unit)
  {
    $this->argumentValidator($unit);
    $Fahrenhit = ($unit*9/5) + 32;
    return $Fahrenhit;
  }

  public function convertKelvinToCelsius($unit)
  {
    $this->argumentValidator($unit);
    $Celsius = $unit - 273.15;
    return $Celsius;
  }

  public function convertCelsiusToKelvin($unit)
  {
    $this->argumentValidator($unit);
    $Kelvin = $unit + 273.15;
    return $Kelvin;
  }
}

