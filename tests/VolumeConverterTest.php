<?php
namespace ConverterApp;
class VolumeConverterTest extends \PHPUnit_Framework_TestCase 
{
/**
*@test
*/
public function convertMilliLitreToCentiLitre_function_can_validate_integer() 
{
 $convert = new VolumeConverter();
 $result  = $convert->convertMilliLitreToCentiLitre(1);
 $answer = $result-(0.1);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertMilliLitreToCentiLitre_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new VolumeConverter();
 $convert->convertMilliLitreToCentiLitre("abc");
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertMilliLitreToCentiLitre_function_should_throw_InvalidArgumentException_for_negative_integer_argument()
{
 $convert = new VolumeConverter();
 $result  = $convert->convertMilliLitreToCentiLitre(-1);
}

/**
*@test
*/
public function convertMilliLitreToCentiLitre_function_can_validate_zero_number_argument() 
{
 $convert = new VolumeConverter();
 $result  = $convert->convertMilliLitreToCentiLitre(0);
 $this->assertEquals(0,$result);
}
/**
*@test
*/
public function convertCentiLitreToMilliLitre_function_can_validate_integer() 
{
 $convert = new VolumeConverter();
 $result  = $convert->convertCentiLitreToMilliLitre(1);
 $this->assertEquals(10,$result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertCentiLitreToMilliLitre_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new VolumeConverter();
 $convert->convertCentiLitreToMilliLitre("abc");
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertCentiLitreToMilliLitre_function_should_throw_InvalidArgumentException_for_negative_integer_argument()
{
 $convert = new VolumeConverter();
 $result  = $convert->convertCentiLitreToMilliLitre(-1);
}
/**
*@test
*/
public function convertCentiLitreToMilliLitre_function_can_validate_zero_number_argument() 
{
 $convert = new VolumeConverter();
 $result  = $convert->convertCentiLitreToMilliLitre(0);
 $this->assertEquals(0,$result);
}
/**
*@test
*/
public function convertMilliLitreToLitre_function_can_validate_integer() 
{
 $convert = new VolumeConverter();
 $result  = $convert->convertMilliLitreToLitre(1);
 $answer = $result-(0.001);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertMilliLitreToLitre_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new VolumeConverter();
 $convert->convertMilliLitreToLitre("abc");
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertMilliLitreToLitre_function_should_throw_InvalidArgumentException_for_negative_integer_argument()
{
 $convert = new VolumeConverter();
 $result  = $convert->convertMilliLitreToLitre(-1);
}
/**
*@test
*/
public function convertMilliLitreToLitre_function_can_validate_zero_number_argument() 
{
 $convert = new VolumeConverter();
 $result  = $convert->convertMilliLitreToLitre(0);
 $this->assertEquals(0,$result);
}
/**
*@test
*/
public function convertLitreToMilliLitre_function_can_validate_integer() 
{
 $convert = new VolumeConverter();
 $result  = $convert->convertLitreToMilliLitre(1);
 $this->assertEquals(1000,$result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertLitreToMilliLitre_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new VolumeConverter();
 $convert->convertLitreToMilliLitre("abc");
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertLitreToMilliLitre_function_should_throw_InvalidArgumentException_for_negative_integer_argument()
{
 $convert = new VolumeConverter();
 $result  = $convert->convertLitreToMilliLitre(-1);
}
/**
*@test
*/
public function convertLitreToMilliLitre_function_can_validate_zero_number_argument() 
{
 $convert = new VolumeConverter();
 $result  = $convert->convertLitreToMilliLitre(0);
 $this->assertEquals(0,$result);
}
/**
*@test
*/
public function convertLitreToKiloLitre_function_can_validate_integer() 
{
 $convert = new VolumeConverter();
 $result  = $convert->convertLitreToKiloLitre(1);
 $answer = $result-(0.001);
 $this->assertLessThan(0.0001, $answer);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertLitreToKiloLitre_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new VolumeConverter();
 $convert->convertLitreToKiloLitre("abc");
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertLitreToKiloLitre_function_should_throw_InvalidArgumentException_for_negative_integer_argument()
{
 $convert = new VolumeConverter();
 $result  = $convert->convertLitreToKiloLitre(-1);
}
/**
*@test
*/
public function convertLitreToKiloLitre_function_can_validate_zero_number_argument() 
{
 $convert = new VolumeConverter();
 $result  = $convert->convertLitreToKiloLitre(0);
 $this->assertEquals(0,$result);
 }
/**
*@test
*/
public function convertKiloLitreToLitre_function_can_validate_integer() 
{
 $convert = new VolumeConverter();
 $result  = $convert->convertKiloLitreToLitre(1);
 $this->assertEquals(1000,$result);
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertKiloLitreToLitre_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() 
{
 $convert = new VolumeConverter();
 $convert->convertKiloLitreToLitre("abc");
}
/**
*@test
* @expectedException InvalidArgumentException
*/
public function convertKiloLitreToLitre_function_should_throw_InvalidArgumentException_for_negative_integer_argument()
{
 $convert = new VolumeConverter();
 $result  = $convert->convertKiloLitreToLitre(-1);
}
/**
*@test
*/
public function convertKiloLitreToLitre_function_can_validate_zero_number_argument() 
{
 $convert = new VolumeConverter();
 $result  = $convert->convertKiloLitreToLitre(0);
 $this->assertEquals(0,$result);
}
}
