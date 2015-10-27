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
}