<?php

namespace ConvertorApp;

class VolumeConverter extends MetricUnit
{
  public function convertMiliLitreToCentiLitre($unit)
  {
    $centiLitre=$this->miliUnitToCentiUnit($unit);
    return $centiLitre;
  }

  public function convertCentiLitreToMiliLitre($unit)
  {
    $miliLitre=$this->centiUnitToMiliUnit($unit);
    return $miliLitre;
  }

  public function convertMiliLitreToLitre($unit)
  {
    $litre=$this->miliUnitToUnit($unit);
    return $litre;
  }

  public function convertLitreToMiliLitre($unit)
  {
    $miliLitre=$this->unitToMiliUnit($unit);
    return $miliLitre;
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
