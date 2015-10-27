<?php

namespace ConverterApp;

class MilliMeter extends Length
{
  protected $_power;
  public function __construct()
  {
    $this->power = -3;
    parent::__construct("MilliMeter","MM");
  }
}
