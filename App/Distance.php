<? php

namespace ConverterApp;

class Distance extends Value
{
  public function __construct($value,$unit)
  {
    $this->value = $value;
    $this->unit = $unit;
  }
}
