<?php
namespace ConverterApp;
class TemperatureConverterTest extends \PHPUnit_Framework_TestCase 
{
/**
*@test
*/
public function convertFahrenheitToCelsius_function_can_validate_any_positive_integer() 
{
 $convert = new TemperatureConverter();
 $result  = $convert->convertFahrenheitToCelsius(1);
 $answer = $result-(-17.2222);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertFahrenheitToCelsius_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new TemperatureConverter();
 $convert->convertFahrenheitToCelsius("abc");
}
/**
*@test
*/
public function convertFahrenheitToCelsius_function_can_validate_negative_integer_argument()
{
 $convert = new TemperatureConverter();
 $result  = $convert->convertFahrenheitToCelsius(-1);
 $answer = $result-(-18.3333);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
*/
public function convertFahrenheitToCelsius_function_can_validate_zero_number_argument() 
{
 $convert = new TemperatureConverter();
 $result  = $convert->convertFahrenheitToCelsius(0);
 $answer = $result-(-17.7778);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
*/
public function convertCelsiusToFahrenheit_function_can_validate_integer_argument()
{
 $convert = new TemperatureConverter();
 $result  = $convert->convertCelsiusToFahrenheit(1);
 $answer = $result-(33.8);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertCelsiusToFahrenheit_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new TemperatureConverter();
 $convert->convertCelsiusToFahrenheit("abc");
}
/**
*@test
*/
public function convertCelsiusToFahrenheit_function_can_validate_negative_integer_argument() 
{
 $convert = new TemperatureConverter();
 $result  = $convert->convertCelsiusToFahrenheit(-1);
 $answer = $result-(30.2);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
*/
public function convertCelsiusToFahrenheit_function_can_validate_zero_number_argument() 
{
 $convert = new TemperatureConverter();
 $result  = $convert->convertCelsiusToFahrenheit(0);
 $this->assertEquals(32,$result);
}
/**
*@test
*/
public function convertKelvinToCelsius_function_validate_any_positive_integer() 
{
 $convert = new TemperatureConverter();
 $result  = $convert->convertKelvinToCelsius(1);
 $answer = $result-(-272.15);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertKelvinToCelsius_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new TemperatureConverter();
 $convert->convertKelvinToCelsius("abc");
}
/**
*@test
*/
public function convertKelvinToCelsius_function_can_validate_negative_integer_argument() 
{
 $convert = new TemperatureConverter();
 $result  = $convert->convertKelvinToCelsius(-1);
 $answer = $result-(-274.15);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
*/
public function convertKelvinToCelsius_function_can_validate_zero_number_argument() 
{
 $convert = new TemperatureConverter();
 $result  = $convert->convertKelvinToCelsius(0);
 $answer = $result-(-273.15);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
*/
public function convertCelsiusToKelvin_function_can_validate_value_which_is_integer() 
{
 $convert = new TemperatureConverter();
 $result  = $convert->convertCelsiusToKelvin(1);
 $answer = $result-(274.15);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertCelsiusToKelvin_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new TemperatureConverter();
 $convert->convertCelsiusToKelvin("abc");
}
/**
*@test
*/
public function convertCelsiusToKelvin_function_can_validate_negative_integer_argument() 
{
 $convert = new TemperatureConverter();
 $result  = $convert->convertCelsiusToKelvin(-1);
 $answer = $result-(272.15);
 $this->assertLessThan(0.0001, $answer);
}
}
