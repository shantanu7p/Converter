<?php
namespace ConverterApp;
class WeightConverterTest extends \PHPUnit_Framework_TestCase
{
/**
*@test
*/
public function convertGramToKilogram_function_can_validate_integer() 
{
 $convert = new WeightConverter();
 $result  = $convert->convertGramToKilogram(1);
 $answer = $result-(0.001);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertGramToKilogram_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new WeightConverter();
 $convert->convertGramToKilogram("abc");
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertGramToKilogram_function_should_throw_InvalidArgumentException_for_negative_integer_argument()
{
 $convert = new WeightConverter();
 $result  = $convert->convertGramToKilogram(-1);
}
/**
*@test
*/
public function convertGramToKilogram_function_can_validate_zero_number_argument() 
{
 $convert = new WeightConverter();
 $result  = $convert->convertGramToKilogram(0);
 $this->assertEquals(0,$result);
}
/**
*@test
*/
public function convertKilogramToGram_function_can_validate_integer_value()
{
 $convert = new WeightConverter();
 $result  = $convert->convertKilogramToGram(1);
 $this->assertEquals(1000,$result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertKilogramToGram_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new WeightConverter();
 $convert->convertKilogramToGram("abc");
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertKilogramToGram_function_should_throw_InvalidArgumentException_for_negative_integer_argument()
{
 $convert = new WeightConverter();
 $result  = $convert->convertKilogramToGram(-1);
}
/**
*@test
*/
public function convertKilogramToGram_function_can_accept_zero_number_argument() 
{
 $convert = new WeightConverter();
 $result  = $convert->convertKilogramToGram(0);
 $this->assertEquals(0,$result);
}
/**
*@test
*/
public function convertMiliGramToGram_function_can_validate_integer_value() 
{
 $convert = new WeightConverter();
 $result  = $convert->convertMilliGramToGram(1);
 $answer = $result-(0.001);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertMiliGramToGram_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
	$convert = new WeightConverter();
	$convert->convertMilliGramToGram("abc");
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertMiliGramToGram_function_should_throw_InvalidArgumentException_for_negative_integer_argument()
{
 $convert = new WeightConverter();
 $result  = $convert->convertMilliGramToGram(-1);
}
/**
*@test
*/
public function convertMiliGramToGram_function_can_validate_zero_number_argument() 
{
 $convert = new WeightConverter();
 $result  = $convert->convertGramToMilliGram(0);
 $this->assertEquals(0, $result);
}
/**
*@test
*/
public function convertGramToMiliGram_function_can_validate_integer_value() 
{
 $convert = new WeightConverter();
 $result  = $convert->convertGramToMilliGram(1);
 $this->assertEquals(1000, $result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertGramToMiliGram_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new WeightConverter();
 $convert->convertGramToMilliGram("abc");
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertGramToMiliGram_function_should_throw_InvalidArgumentException_for_negative_integer_argument() 
{
 $convert = new WeightConverter();
 $result  = $convert->convertGramToMilliGram(-1);
}
/**
*@test
*/
public function convertGramToMiliGram_function_can_validate_zero_number_argument() 
{
 $convert = new WeightConverter();
 $result  = $convert->convertGramToMilliGram(0);
 $this->assertEquals(0, $result);
}
}

