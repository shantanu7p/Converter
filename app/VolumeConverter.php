<?php

namespace ConverterApp;

class VolumeConverter extends MetricUnit
{
  public function convertMilliLitreToCentiLitre($unit)
  {
    $centiLitre=$this->milliUnitToCentiUnit($unit);
    return $centiLitre;
  }

  public function convertCentiLitreToMilliLitre($unit)
  {
    $milliLitre=$this->centiUnitToMilliUnit($unit);
    return $milliLitre;
  }

  public function convertMilliLitreToLitre($unit)
  {
    $litre=$this->milliUnitToUnit($unit);
    return $litre;
  }

  public function convertLitreToMilliLitre($unit)
  {
    $milliLitre=$this->unitToMilliUnit($unit);
    return $milliLitre;
  }

  public function convertLitreToKiloLitre($unit)
  {
    $kiloLitre=$this->unitToKiloUnit($unit);
    return $kiloLitre;
  }

  public function convertKiloLitreToLitre($unit)
  {
    $litre=$this->kiloUnitToUnit($unit);
    return $litre;
  }
}
