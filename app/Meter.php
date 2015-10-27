<?php

namespace ConverterApp;

class Meter extends Length
{
  protected $_power;
  public function __construct()
  {
    $this->power = 0;
    parent::__construct("Meter","M");
  }
}
