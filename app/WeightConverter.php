<?php

namespace ConvertorApp;

class WeightConverter extends MetricUnit
{
  public function convertMiliGramToGram($unit)
  {
    $gram=$this->miliUnitToUnit($unit);
    return $gram;
  }

  public function convertGramToMiliGram($unit)
  {
    $miliGram=$this->unitTomiliUnit($unit);
    return $miligram;
  }

  public function convertGramToKiloGram($unit)
  {
    $kiloGram=$this->unitToKiloUnit($unit);
    return $KiloGram;
  }

  public function convertKiloGramToGram($unit)
  {
    $miliGram=$this->kiloUnitToUnit($unit);
    return $miligram;
  }
}
