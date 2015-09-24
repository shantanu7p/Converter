<?php
namespace ConvertorApp;
class LengthConvertorTest extends \PHPUnit_Framework_TestCase {
  /**
	 *@test
	 */
	public function convertMeterToKilometer_function_can_validate_integer_value() {
		$convert = new LengthConvertor();
		$result  = $convert->convertMeterToKilometer(1);
		$answer = $result-(0.001);
		$this->assertLessThan(0.0001, $answer);
	}
	/**
	 *@test
	 * @expectedException InvalidArgumentException
	 */
  public function convertMeterToKilometer_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() {
   $convert = new LengthConvertor();
	 $convert->convertMeterToKilometer("abc");
	}
  /**
	 *@test
	 */
  public function convertMeterToKilometer_function_can_validate_negative_integer_argument() {
	 $convert = new LengthConvertor();
	 $result  = $convert->convertMeterToKilometer(-1);
	 $answer = $result-(-0.001);
	}
  /**
   *@test
   */
  public function convertMeterToKilometer_function_can_validate_zero_number_argument() {
	 $convert = new LengthConvertor();
	 $result  = $convert->convertMeterToKilometer(0);
	 $this->assertEquals(0,$result);
}
  /**
	 *@test
	 */
  public function convertKilometerToMeter_function_can_validate_integer_value() {
		$convert = new LengthConvertor();
		$result  = $convert->convertKilometerToMeter(1);
		$this->assertEquals(1000,$result);
	}
	/**
	 *@test
	 * @expectedException InvalidArgumentException
	 */
  public function convertKilometerToMeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() {
		$convert = new LengthConvertor();
		$convert->convertKilometerToMeter("abc");
		}
   /**
	 *@test
	 */
  public function convertKilometerToMeter_function_can_validate_negative_integer_argument() {
	$convert = new LengthConvertor();
	$result  = $convert->convertKilometerToMeter(-1);
	$this->assertEquals(-1000,$result);
}
  /**
   *@test
	 */
	public function convertKilometerToMeter_function_can_validate_zero_number_argument() {
	$convert = new LengthConvertor();
		$result  = $convert->convertKilometerToMeter(0);
		//$answer = $result-(0);
		$this->assertEquals(0,$result);
}
  /**
	 *@test
	 */
	public function convertMeterToCentimeter_function_can_validate_integer_value() {
		$convert = new LengthConvertor();
		$result  = $convert->convertMeterToCentimeter(1);
		$this->assertEquals(100,$result);
	}
  /**
	 *@test
	 * @expectedException InvalidArgumentException
	 */
  public function convertMeterToCentimeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() {
	$convert = new LengthConvertor();
	$convert->convertMeterToCentimeter("abc");
	}
   /**
	 *@test
	 */
  public function convertMeterToCentimeter_function_can_validate_negative_integer_argument() {
	$convert = new LengthConvertor();
	$result  = $convert->convertMeterToCentimeter(-1);
	$this->assertEquals(-100,$result);
}
  /**
   *@test
	 */
	public function convertMeterToCentimeter_function_can_validate_zero_number_argument() {
	$convert = new LengthConvertor();
	$result  = $convert->convertMeterToCentimeter(0);
	$this->assertEquals(0,$result);
}
  /**
	 *@test
	 */
	public function convertCentimeterToMeter_function_can_validate_integer_value() {
	$convert = new LengthConvertor();
	$result  = $convert->convertCentimeterToMeter(1);
	$answer = $result-(0.01);
	$this->assertLessThan(0.0001, $answer);
	}
  /**
	 *@test
	 * @expectedException InvalidArgumentException
	 */
  public function convertCentimeterToMeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() {
	$convert = new LengthConvertor();
	$convert->convertCentimeterToMeter("abc");
	}
   /**
	 *@test
		 */
	public function convertCentimeterToMeter_function_can_validate_negative_integer_argument() {
	$convert = new LengthConvertor();
	$result  = $convert->convertCentimeterToMeter(-1);
	$answer = $result-(-0.01);
	$this->assertLessThan(0.0001, $answer);
 }
}
   