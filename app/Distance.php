<?php

namespace ConverterApp;

class Distance extends Value
{
    public function __construct($value, $unit)
    {
        if ($value<0)
        {
            throw new \InvalidArgumentException("Please enter value greater than zero.");
        }
        elseif (is_null($value))
        {
           throw new \InvalidArgumentException("The source value should not be null.");
        }
       elseif (is_string($value))
       {
           throw new \InvalidArgumentException("The source value can not be a string please inter valid value.");
       }
       $this->value = $value;
       $this->unit = $unit;
  }
}
