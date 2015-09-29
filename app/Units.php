<?php

namespace ConverterApp;

class Units
{
  
  public function argumentValidator($argument)
  {
    if (is_string($argument))
    {
      throw new \InvalidArgumentException("Please Enter valid Argument");
    } elseif (is_null($argument))
    {
      throw new \InvalidArgumentException("Please Enter valid Argument");
    }
  }
}
