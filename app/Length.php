<?php

namespace ConverterApp;

class Length extends Unit
{
  public function __construct($longName,$shortName)
  {
  	
    $this->longName = $longName;
    $this->shortName = $shortName;
  }
}
