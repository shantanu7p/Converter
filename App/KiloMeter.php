<? php 
namespace ConverterApp;
class KiloMeter extends LengthMetric
{
   public function __construct($newUnitPower)
  {
     public $sourceUnitPower = 3;
     $this->$sourceUnitName = "kilometer";
     $this->$onvertedUnitPower = $newUnitPower;
   }
}
