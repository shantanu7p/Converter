<?php

namespace ConverterApp;

class LengthConverter extends MetricUnit
{
  public function convertMilliMeterToCentiMeter($unit)
  {
    $centiMeter=$this->milliUnitToCentiUnit($unit);
    return $centiMeter;
  }

  public function convertCentiMeterToMilliMeter($unit)
  {
    $milliMeter=$this->centiUnitToMilliUnit($unit);
    return $milliMeter;
  }

  public function convertMilliMeterToMeter($unit)
  {
    $meter=$this->milliUnitToUnit($unit);
    return $meter;
  }

  public function convertMeterToMilliMeter($unit)
  {
    $milliMeter=$this->unitToMilliUnit($unit);
    return $milliMeter;
  }

  public function convertMeterToKiloMeter($unit)
  {
    $kiloMeter=$this->unitToKiloUnit($unit);
    return $kiloMeter;
  }

  public function convertKiloMeterToMeter($unit)
  {
    $meter=$this->kiloUnitToUnit($unit);
    return $meter;
  }
}
