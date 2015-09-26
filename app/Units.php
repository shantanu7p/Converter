<?php
namespace ConvertorApp;
class Units
{	

	public function argumentValidator($argument)
	{
		if (is_string($argument)) {
			throw new \InvalidArgumentException("Please Enter valid Length");
		} elseif (is_null($argument)) {
			throw new \InvalidArgumentException("Please Enter valid Length");
		}
	}
}
class MetricUnit extends Units
{
	
   public function miliUnitToUnit($unit)
   {
   	 $this->argumentValidator($unit);
   	 $unit = $unit*100;
		 return $unit;
   }

   public function unitToMiliUnit($unit)
   {
   	 $this->argumentValidator($unit);
   	 $miliUnit = $unit/100;
		 return $miliUnit;
   }


  public function unitToKiloUnit($unit)
   {
   	 $this->argumentValidator($unit);
   	 $kiloUnit = $unit*1000;
		 return $kiloUnit;
   }

  public function kiloUnitToUnit($unit)
   {
   	 $this->argumentValidator($unit);
   	 $unit = $unit*1000;
		 return $unit;
   }

  public function miliUnitToKiloUnit($unit)
   {
   	 $this->argumentValidator($unit);
   	 $kiloUnit = $unit/100000;
		 return $kiloUnit;
   }
   public function kiloUnitTomiliUnit($unit)
   {
   	 $this->argumentValidator($unit);
   	 $miliUnit = $unit*100000;
		 return $miliUnit;
   }
     public function miliUnitTocentiUnit($unit)
   {
   	 $this->argumentValidator($unit);
   	 $centiUnit = $unit/10;
		 return $centiUnit;
   }
   public function centiUnitToMiliUnit($unit)
   {
   	 $this->argumentValidator($unit);
   	 $miliUnit = $unit*10;
		 return $miliUnit;
   }
}
class VolumeConverter extends MetricUnit
{

public function convertMililitreToCentilitre($unit)
{
    
  $centiLitre=$this->miliUnitTocentiUnit($unit);
  return $centiLitre;

}
public function convertCentilitreToMililitre($unit)
{
    
  $miliLitre=$this->centiUnitToMiliUnit($unit);
  return $miliLitre;
}
}


class WeightConverter extends MetricUnit
{
public function convertMiliGramToGram($unit)
{
    
  $gram=$this->miliUnitToUnit($unit);
  return $gram;
}
public function convertGramToMiliGram($unit)
{
    
  $miliGram=$this->UnitTomiliUnit($unit);
  return $miligram;
}

}
class LengthConverter extends MetricUnit
{
public function convertMiliMeterToCentiMeter($unit)
{
    
  $centiMeter=$this->miliUnitTocentiUnit($unit);
  return $centiMeter;

}
public function convertCentiMeterToMiliMeter($unit)
{
    
  $miliMeter=$this->centiUnitToMiliUnit($unit);
  return $miliMeter;

}


}