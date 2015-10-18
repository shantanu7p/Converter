<? php 
namespace ConverterApp;
class CentiMeter extends LengthMetric
{
    public function __construct($newUnitPower)
    {
      public $sourceUnitPower = -2;
      $this->$sourceUnitName = "centimeter";
      $this->$onvertedUnitPower = $newUnitPower;
     }
  }	
}
