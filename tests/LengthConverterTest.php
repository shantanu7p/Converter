<?php
namespace ConverterApp;
class LengthConverterTest extends \PHPUnit_Framework_TestCase 
{
/**
*@test
*/
public function convertMilliMetertocentimeter_function_can_validate_integer_value() 
{
 $convert = new LengthConverter();
 $result  = $convert->convertMilliMetertocentimeter(1);
 $answer = $result-(0.1);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertMilliMetertocentimeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new LengthConverter();
 $convert->convertMilliMetertocentimeter("abc");
}
/**
*@test
*/
public function convertMilliMetertocentimeter_function_can_validate_zero_number_argument() 
{
 $convert = new LengthConverter();
 $result  = $convert->convertMilliMetertocentimeter(0);
 $this->assertEquals(0,$result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertMilliMetertocentimeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_negative_integer() 
{
 $convert = new LengthConverter();
 $convert->convertMilliMetertocentimeter(-1);
}
/**
*@test
*/
public function convertCentiMeterToMillimeter_function_can_validate_integer_value() 
{
 $convert = new LengthConverter();
 $result  = $convert->convertCentiMeterToMilliMeter(1);
 $this->assertEquals(10, $result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertCentiMetertoMilimeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new LengthConverter();
 $convert->convertCentiMeterToMillimeter("abc");
}
/**
*@test
*/
public function convertCentiMetertoMilimeter_function_can_validate_zero_number_argument() 
{
 $convert = new LengthConverter();
 $result  = $convert->convertCentiMetertoMillimeter(0);
 $this->assertEquals(0,$result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertCentiMetertoMillimeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_negative_integer() 
{
 $convert = new LengthConverter();
 $convert->convertCentiMetertoMillimeter(-1);
}
/**
*@test
*/
public function convertMillimetertoMeter_function_can_validate_integer_value() 
{
 $convert = new LengthConverter();
 $result  = $convert->convertMilliMeterToMeter(1);
 $this->assertEquals(0.001, $result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertMillimetertoMeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new LengthConverter();
 $convert->convertMillimetertoMeter("abc");
}
/**
*@test
*/
public function convertMillimetertoMeter_function_can_validate_zero_number_argument() 
{
 $convert = new LengthConverter();
 $result  = $convert->convertMillimetertoMeter(0);
 $this->assertEquals(0,$result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertMillimetertoMeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_negative_integer() 
{
 $convert = new LengthConverter;
 $convert->convertMillimetertoMeter(-1);
}
/**
*@test
*/
public function convertMetertoMilliMeter_function_can_validate_integer_value() 
{
 $convert = new LengthConverter();
 $result  = $convert->convertMeterToMilliMeter(1);
 $this->assertEquals(1000, $result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertMetertoMilliMeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new LengthConverter();
 $convert->convertMetertoMilliMeter("abc");
}
/**
*@test
*/
public function convertMetertoMilliMeter_function_can_validate_zero_number_argument() 
{
 $convert = new LengthConverter();
 $result  = $convert->convertMetertoMilliMeter(0);
 $this->assertEquals(0,$result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertMetertoMilliMeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_negative_integer() 
{
 $convert = new LengthConverter();
 $convert->convertMetertoMilliMeter(-1);
}
/**
*@test
*/
public function convertMetertoKiloMeter_function_can_validate_integer_value() 
{
 $convert = new LengthConverter();
 $result  = $convert->convertMeterToKiloMeter(1);
 $answer = $result-(0.001);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertMetertoKiloMeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new LengthConverter();
 $convert->convertMetertoKiloMeter("abc");
}
/**
*@test
*/
public function convertMetertoKiloMeter_function_can_validate_zero_number_argument() 
{
 $convert = new LengthConverter();
 $result  = $convert->convertMetertoKiloMeter(0);
 $this->assertEquals(0,$result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertMetertoKiloMeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_negative_integer() 
{
 $convert = new LengthConverter();
 $convert->convertMetertoKiloMeter(-1);
}
/**
*@test
*/
public function convertKiloMetertoMeter_function_can_validate_integer_value() 
{
 $convert = new LengthConverter();
 $result  = $convert->convertKiloMeterToMeter(1);
 $this->assertEquals(1000, $result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertKiloMetertoMeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new LengthConverter();
 $convert->convertKiloMetertoMeter("abc");
}
/**
*@test
*/
public function convertKiloMetertoMeter_function_can_validate_zero_number_argument()
{
 $convert = new LengthConverter();
 $result  = $convert->convertKiloMetertoMeter(0);
 $this->assertEquals(0,$result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertKiloMetertoMeter_function_should_throw_InvalidArgumentException_for_argument_which_Contain_negative_integer() 
{
 $convert = new LengthConverter();
 $convert->convertKiloMetertoMeter(-1);
 }
}


