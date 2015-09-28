<?php

namespace ConvertorApp;

class Units
{
  public function argumentValidator($argument)
  {
    if (is_string($argument))
    {
      throw new \InvalidArgumentException("Please Enter valid Length");
    } elseif (is_null($argument))
    {
      throw new \InvalidArgumentException("Please Enter valid Length");
    }
  }
}
