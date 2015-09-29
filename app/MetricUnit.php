<?php

namespace ConverterApp;

class MetricUnit extends Units
{
  public function milliUnitToUnit($unit)
  {
     if ($unit < 0)
    {
      throw new \InvalidArgumentException("Please Enter valid Argument");
    }
    $this->argumentValidator($unit);
    $unit = $unit/1000;
    return $unit;
  }

  public function unitToMilliUnit($unit)
  {
     if ($unit < 0)
    {
      throw new \InvalidArgumentException("Please Enter valid Argument");
    }
    $this->argumentValidator($unit);
    $milliUnit = $unit*1000;
    return $milliUnit;
  }

  public function unitToKiloUnit($unit)
  {
     if ($unit < 0)
    {
      throw new \InvalidArgumentException("Please Enter valid Argument");
    }
    $this->argumentValidator($unit);
    $kiloUnit = $unit/1000;
    return $kiloUnit;
  }

  public function kiloUnitToUnit($unit)
  {
     if ($unit < 0)
    {
      throw new \InvalidArgumentException("Please Enter valid Argument");
    }
    $this->argumentValidator($unit);
    $unit = $unit*1000;
    return $unit;
  }
  public function milliUnitToKiloUnit($unit)
  {
     if ($unit < 0)
    {
      throw new \InvalidArgumentException("Please Enter valid Argument");
    }
    $this->argumentValidator($unit);
    $kiloUnit = $unit/100000;
    return $kiloUnit;
  }

  public function kiloUnitToMilliUnit($unit)
  {
     if ($unit < 0)
    {
      throw new \InvalidArgumentException("Please Enter valid Argument");
    }
    $this->argumentValidator($unit);
    $milliUnit = $unit*100000;
    return $milliUnit;
  }

  public function milliUnitToCentiUnit($unit)
  {
     if ($unit < 0)
    {
      throw new \InvalidArgumentException("Please Enter valid Argument");
    }
    $this->argumentValidator($unit);
    $centiUnit = $unit/10;
    return $centiUnit;
  }

  public function centiUnitToMilliUnit($unit)
  {
     if ($unit < 0)
    {
      throw new \InvalidArgumentException("Please Enter valid Argument");
    }
    $this->argumentValidator($unit);
    $milliUnit = $unit*10;
    return $milliUnit;
  }
}
