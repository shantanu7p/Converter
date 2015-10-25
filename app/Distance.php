<?php

namespace ConverterApp;

class Distance extends Value
{
  public function __construct($value,$unit)
  {
     if($value<0)
      {
     	 throw new \InvalidArgumentException("Please enter valid argument.");
      }
     elseif(is_null($value))
      {
       throw new \InvalidArgumentException("Please enter valid argument.");
      }
     elseif(is_string($value))
      {
       throw new \InvalidArgumentException("Please enter valid argument.");
      }
    $this->value = $value;
    $this->unit = $unit;
  }
}
