<?php

namespace ConvertorApp;

class LengthConverter extends MetricUnit
{
  public function convertMiliMeterToCentiMeter($unit)
  {
    $centiMeter=$this->miliUnitToCentiUnit($unit);
    return $centiMeter;
  }

  public function convertCentiMeterToMiliMeter($unit)
  {
    $miliMeter=$this->centiUnitToMiliUnit($unit);
    return $miliMeter;
  }

  public function convertMiliMeterToMeter($unit)
  {
    $meter=$this->miliUnitToUnit($unit);
    return $meter;
  }

  public function convertMeterToMiliMeter($unit)
  {
    $miliMeter=$this->unitToMiliUnit($unit);
    return $miliMeter;
  }

  public function convertMeterToKiloMeter($unit)
  {
    $kiloMeter=$this->unitToKiloUnit($unit);
    return $meter;
  }

  public function convertKiloMeterToMeter($unit)
  {
    $meter=$this->kiloUnitToUnit($unit);
    return $miliMeter;
  }
}
