<?php
namespace ConverterApp;

class MetricUnitConverterTest extends \PHPUnit_Framework_TestCase 
{

  /**
  *@test
	*/
 public function it_can_validate_any_positive_number_for_meter_to_kilometer_conversion()
 { 
	 $converter  = new MetricUnitConverter();
	 $meter      = new Meter();
	 $kilometer  = new KiloMeter();
	 $currentDistance = new Distance(1000,$meter);
	 $newDistance     = new Distance(0,$kilometer);
	 $result=$converter->converter($currentDistance,$newDistance);
   $this->assertEquals($result,1); 
 }
	/**
  *@test
	 */
 public function it_can_validate_any_positive_number_for_KiloMeter_to_meter_conversion()
 { 
	 $converter  = new MetricUnitConverter();
	 $meter      = new Meter();
	 $kilometer  = new KiloMeter();
	 $currentDistance = new Distance(1,$kilometer);
	 $newDistance     = new Distance(1000,$meter);
	 $result=$converter->converter($currentDistance,$newDistance);
   $this->assertEquals($result,1000);
 }
 	/**
  *@test
	 */
 public function it_can_validate_any_positive_number_for_Meter_to_centiMeter_conversion()
 {
	 $converter  = new MetricUnitConverter();
	 $meter      = new Meter();
	 $centimeter  = new CentiMeter();
	 $currentDistance = new Distance(1,$meter);
	 $newDistance     = new Distance(100,$centimeter);
	 $result=$converter->converter($currentDistance,$newDistance);
   $this->assertEquals($result,100);
 }
	/**
  *@test
	 */
 public function it_can_validate_any_positive_number_for_centiMeter_to_meter_conversion()
 {
	 $converter  = new MetricUnitConverter();
	 $meter      = new Meter();
	 $centimeter  = new CentiMeter();
	 $currentDistance = new Distance(100,$centimeter);
	 $newDistance     = new Distance(1,$meter);
	 $result=$converter->converter($currentDistance,$newDistance);
   $this->assertEquals($result,1);
 }
	/**
  *@test
	 */
 public function it_can_validate_any_positive_number_for_centiMeter_to_kiloMeter_conversion()
 {
   $converter  = new MetricUnitConverter();
	 $centimeter      = new CentiMeter();
	 $kilometer  = new KiloMeter();
	 $currentDistance = new Distance(10,$centimeter);
	 $newDistance     = new Distance(0.0001,$kilometer);
	 $result=$converter->converter($currentDistance,$newDistance);
	 $this->assertEquals($result,0.0001);
 }
  /**
  *@test
	 */
 public function it_can_validate_any_positive_number_for_kiloMeter_to_centiMeter_conversion()
 {
	 $converter  = new MetricUnitConverter();
	 $centimeter      = new CentiMeter();
	 $kilometer  = new KiloMeter();
	 $currentDistance = new Distance(1,$kilometer);
	 $newDistance     = new Distance(100000,$centimeter);
	 $result=$converter->converter($currentDistance,$newDistance);
	 $this->assertEquals($result,100000);
 }
 /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
 public function it_should_throw_InvalidArgumentException_for_negative_argument_for_kiloMeter_to_centiMeter_conversion()
 {
   $converter  = new MetricUnitConverter();
	 $centimeter      = new CentiMeter();
	 $kilometer  = new KiloMeter();
	 $currentDistance = new Distance(1,$kilometer);
	 $newDistance     = new Distance(-100000,$centimeter);
	 $result=$converter->converter($currentDistance,$newDistance);
 }
 /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
  public function it_should_throw_InvalidArgumentException_for_negative_argument_for_centiMeter_to_kiloMeter_conversion()
  {
    $converter  = new MetricUnitConverter();
	  $centimeter      = new CentiMeter();
	  $kilometer  = new KiloMeter();
	  $currentDistance = new Distance(-1,$centimeter);
	  $newDistance     = new Distance(-100000,$kilometer);
	  $result=$converter->converter($currentDistance,$newDistance);
  }
 /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
  public function it_should_throw_InvalidArgumentException_for_negative_argument_for_kiloMeter_to_meter_conversion()
  {
	  $converter  = new MetricUnitConverter();
	  $meter      = new Meter();
	  $kilometer  = new KiloMeter();
	  $currentDistance = new Distance(1,$kilometer);
	  $newDistance     = new Distance(-100000,$meter);
	  $result=$converter->converter($currentDistance,$newDistance);
   }
  /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
  public function it_should_throw_InvalidArgumentException_for_negative_argument_for_meter_to_kiloMeter_conversion()
  {
	  $converter  = new MetricUnitConverter();
	  $meter      = new Meter();
	  $kilometer  = new KiloMeter();
	  $currentDistance = new Distance(1,$kilometer);
	  $newDistance     = new Distance(-100000,$meter);
	  $result=$converter->converter($currentDistance,$newDistance);
	 }
  /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
  public function it_should_throw_InvalidArgumentException_for_negative_argument_for_meter_to_centiMeter_conversion()
  {
	  $converter  = new MetricUnitConverter();
	  $meter      = new Meter();
	  $centimeter  = new CentiMeter();
	  $currentDistance = new Distance(1,$meter);
	  $newDistance     = new Distance(-100000,$centimeter);
	  $result=$converter->converter($currentDistance,$newDistance);
  }
  /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
  public function it_should_throw_InvalidArgumentException_for_negative_argument_for_centimeter_to_meter_conversion()
  {
	  $converter  = new MetricUnitConverter();
	  $meter      = new Meter();
	  $centimeter  = new CentiMeter();
	  $currentDistance = new Distance(1,$centimeter);
	  $newDistance     = new Distance(-100000,$meter);
	  $result=$converter->converter($currentDistance,$newDistance);
  }
  /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
  public function it_should_throw_InvalidArgumentException_for_null_argument_for_kiloMeter_to_centiMeter_conversion()
  {
 	  $converter  = new MetricUnitConverter();
	  $centimeter      = new CentiMeter();
	  $kilometer  = new KiloMeter();
	  $currentDistance = new Distance(null,$kilometer);
	  $newDistance     = new Distance(null,$centimeter);
	  $result=$converter->converter($currentDistance,$newDistance);
  }
  /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
  public function it_should_throw_InvalidArgumentException_for_null_argument_for_centiMeter_to_kiloMeter_conversion()
  {  
	  $converter  = new MetricUnitConverter();
	  $centimeter      = new CentiMeter();
	  $kilometer  = new KiloMeter();
	  $currentDistance = new Distance(null,$centimeter);
	  $newDistance     = new Distance(null,$kilometer);
	  $result=$converter->converter($currentDistance,$newDistance);
  }
  /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
  public function it_should_throw_InvalidArgumentException_for_null_argument_for_kiloMeter_to_meter_conversion()
  {
	  $converter  = new MetricUnitConverter();
	  $meter      = new Meter();
	  $kilometer  = new KiloMeter();
	  $currentDistance = new Distance(null,$kilometer);
	  $newDistance     = new Distance(null,$meter);
	  $result=$converter->converter($currentDistance,$newDistance);
  }
  /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
  public function it_should_throw_InvalidArgumentException_for_null_argument_for_meter_to_kiloMeter_conversion()
  {
	  $converter  = new MetricUnitConverter();
	  $meter      = new Meter();
	  $kilometer  = new KiloMeter();
	  $currentDistance = new Distance(null,$kilometer);
	  $newDistance     = new Distance(null,$meter);
	  $result=$converter->converter($currentDistance,$newDistance);
  }
  /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
  public function it_should_throw_InvalidArgumentException_for_null_argument_for_meter_to_centiMeter_conversion()
  {
	  $converter  = new MetricUnitConverter();
	  $meter      = new Meter();
	  $centimeter  = new CentiMeter();
	  $currentDistance = new Distance(null,$meter);
	  $newDistance     = new Distance(null,$centimeter);
	  $result=$converter->converter($currentDistance,$newDistance);
  }
  /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
  public function it_should_throw_InvalidArgumentException_for_null_argument_for_centimeter_to_meter_conversion()
  {
	  $converter  = new MetricUnitConverter();
	  $meter      = new Meter();
	  $centimeter  = new CentiMeter();
	  $currentDistance = new Distance(null,$centimeter);
	  $newDistance     = new Distance(null,$meter);
	  $result=$converter->converter($currentDistance,$newDistance);
  }
  /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
  public function it_should_throw_InvalidArgumentException_for_string_argument_for_kiloMeter_to_centiMeter_conversion()
  {
	  $converter  = new MetricUnitConverter();
	  $centimeter      = new CentiMeter();
	  $kilometer  = new KiloMeter();
	  $currentDistance = new Distance("abc",$kilometer);
	  $newDistance     = new Distance("abcd",$centimeter);
	  $result=$converter->converter($currentDistance,$newDistance);
  }
  /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
 	 */
  public function it_should_throw_InvalidArgumentException_for_string_argument_for_centiMeter_to_kiloMeter_conversion()
  {
	  $converter  = new MetricUnitConverter();
	  $centimeter      = new CentiMeter();
	  $kilometer  = new KiloMeter();
	  $currentDistance = new Distance("abc",$centimeter);
	  $newDistance     = new Distance("abc",$kilometer);
	  $result=$converter->converter($currentDistance,$newDistance);
	}
  /**
	*
	*@test
	*@expectedException InvalidArgumentException
	*/
  public function it_should_throw_InvalidArgumentException_for_string_argument_for_kiloMeter_to_meter_conversion()
  {
	  $converter  = new MetricUnitConverter();
	  $meter      = new Meter();
	  $kilometer  = new KiloMeter();
	  $currentDistance = new Distance("abc",$kilometer);
	  $newDistance     = new Distance("abc",$meter);
	  $result=$converter->converter($currentDistance,$newDistance);
  }
  /**
	*
	*@test
	*@expectedException InvalidArgumentException
	*/
  public function it_should_throw_InvalidArgumentException_for_string_argument_for_meter_to_kiloMeter_conversion()
  {
	  $converter  = new MetricUnitConverter();
	  $meter      = new Meter();
	  $kilometer  = new KiloMeter();
	  $currentDistance = new Distance("abc",$kilometer);
	  $newDistance     = new Distance("abc",$meter);
	  $result=$converter->converter($currentDistance,$newDistance);
	}
  /**
	*
	*@test
	*@expectedException InvalidArgumentException
	*/
  public function it_should_throw_InvalidArgumentException_for_string_argument_for_meter_to_centiMeter_conversion()
  {
	  $converter  = new MetricUnitConverter();
	  $meter      = new Meter();
	  $centimeter  = new CentiMeter();
	  $currentDistance = new Distance("abc",$meter);
	  $newDistance     = new Distance("abc",$centimeter);
	  $result=$converter->converter($currentDistance,$newDistance);
  }
  /**
	*
	*@test
	*@expectedException InvalidArgumentException
	*/
  public function it_should_throw_InvalidArgumentException_for_string_argument_for_centimeter_to_meter_conversion()
  {
 	  $converter  = new MetricUnitConverter();
	  $meter      = new Meter();
	  $centimeter  = new CentiMeter();
	  $currentDistance = new Distance("abc",$centimeter);
	  $newDistance     = new Distance("abc",$meter);
	  $result=$converter->converter($currentDistance,$newDistance); 
  }
}
