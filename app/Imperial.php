<?php

namespace ConvertorApp;

class Imperial extends Units
{
  public function _Imperial($validUnit)
  {
    $this->argumentValidator($validUnit);
  }
}
