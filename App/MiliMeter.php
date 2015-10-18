<? php 
namespace ConverterApp;
class MiliMeter extends LengthMetric
{
  public function __construct($newUnitPower)
  {
     public $sourceUnitPower = -3;
     $this->$sourceUnitName = "millimeter";
     $this->$convertedUnitPower = $newUnitPower;
  }	
}
