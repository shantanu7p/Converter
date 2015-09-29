<?php

namespace ConverterApp;

class WeightConverter extends MetricUnit
{
  public function convertMilliGramToGram($unit)
  {
    $gram=$this->milliUnitToUnit($unit);
    return $gram;
  }

  public function convertGramToMilliGram($unit)
  {
    $milliGram=$this->unitToMilliUnit($unit);
    return $milliGram;
  }

  public function convertGramToKiloGram($unit)
  {
    $kiloGram=$this->unitToKiloUnit($unit);
    return $kiloGram;
  }

  public function convertKiloGramToGram($unit)
  {
    $milliGram=$this->kiloUnitToUnit($unit);
    return $milliGram;
  }
}
