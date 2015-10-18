<? php 
namespace ConverterApp;
class Meter extends LengthMetric
{
  public function __construct($newUnitPower)
  {
     public $sourceUnitPower = 0;
     $this->$sourceUnitName = "meter";
     $this->$onvertedUnitPower = $newUnitPower;
  } 
}
