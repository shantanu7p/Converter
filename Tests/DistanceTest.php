<?php
namespace ConverterApp;

class DistanceTest extends \PHPUnit_Framework_TestCase 
{
   /**
	  *
	  *@test
	  *@expectedException InvalidArgumentException
	 */
 public function it_should_throw_InvalidArgumentException_for_negative_argument_for_distance()
 {
    $centimeter      = new CentiMeter();
    $currentDistance = new Distance(-1,$centimeter);
 }
   /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
 public function it_should_throw_InvalidArgumentException_for_null_value_argument_for_distance()
 {  
    $centimeter      = new CentiMeter();
	  $currentDistance = new Distance(null,$centimeter);
 } 
	 /**
	 *
	 *@test
	 *@expectedException InvalidArgumentException
	 */
 public function it_should_throw_InvalidArgumentException_for_string_argument_for_distance()
 {
	  $centimeter      = new CentiMeter();
    $currentDistance = new Distance("vspl",$centimeter);
 }
}



































  

