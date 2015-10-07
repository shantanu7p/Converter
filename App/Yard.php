<? php
namespace ConverterApp;
class Yard extends LengthImperial
{
  public function YardToMeter($value)
  {
    $this->argumentValidator($value);
    $convertedValue = $value * 0.9144;
    return $convertedValue;
  }

  public function MeterToYard($value)
  {
    $this->argumentValidator($value);
    $convertedValue = $value * 1.09361;
    return $convertedValue;
  }

  public function YardToKiloMeter($value)
  {
    $this->argumentValidator($value);
    $convertedValue = $value * 0.0009144;
    return $convertedValue;
  }

  public function KiloMeterToYard($value)
  {
    $this->argumentValidator($value);
    $convertedValue = $value * 1093.61;
    return $convertedValue;
  }
}
