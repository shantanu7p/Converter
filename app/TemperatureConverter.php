<?php

namespace ConvertorApp;

class TemperatureConverter extends Imperial
{
  public function convertFahrenheitToCelsius($unit)
  {
    $imperialUnit = new Imperial($unit);
    $Celsius = (5/9)*($unit - 32);
    return $Celsius;
  }

  public function convertCelsiusToFahrenheit($unit)
  {
    $imperialUnit = new Imperial($unit);
    $Fahrenhit = ($unit*9/5) + 32;
    return $Fahrenhit;
  }

  public function convertKelvinToCelsius($temprature)
  {
    $imperialUnit = new Imperial($unit);
    $Celsius = $unit - 273.15;
    return $Celsius;
  }

  public function convertCelsiusToKelvin($temprature)
  {
    $imperialUnit = new Imperial($unit);
    $Kelvin = $unit + 273.15;
    return $Kelvin;
  }
}
