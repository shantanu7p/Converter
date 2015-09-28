<?php

namespace ConvertorApp;

class MetricUnit extends Units
{
  public function miliUnitToUnit($unit)
  {
    $this->argumentValidator($unit);
    $unit = $unit*100;
    return $unit;
  }

  public function unitToMiliUnit($unit)
  {
    $this->argumentValidator($unit);
    $miliUnit = $unit/100;
    return $miliUnit;
  }

  public function unitToKiloUnit($unit)
  {
    $this->argumentValidator($unit);
    $kiloUnit = $unit*1000;
    return $kiloUnit;
  }

  public function kiloUnitToUnit($unit)
  {
    $this->argumentValidator($unit);
    $unit = $unit*1000;
    return $unit;
  }
  public function miliUnitToKiloUnit($unit)
  {
    $this->argumentValidator($unit);
    $kiloUnit = $unit/100000;
    return $kiloUnit;
  }

  public function kiloUnitTomiliUnit($unit)
  {
    $this->argumentValidator($unit);
    $miliUnit = $unit*100000;
    return $miliUnit;
  }

  public function miliUnitToCentiUnit($unit)
  {
    $this->argumentValidator($unit);
    $centiUnit = $unit/10;
    return $centiUnit;
  }

  public function centiUnitToMiliUnit($unit)
  {
    $this->argumentValidator($unit);
    $miliUnit = $unit*10;
    return $miliUnit;
  }
}
