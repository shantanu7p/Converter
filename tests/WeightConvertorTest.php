<?php
namespace ConvertorApp;
class WeightConvertorTest extends \PHPUnit_Framework_TestCase {
  /**
  *@test
	 */
 	public function convertGramToKilogram_function_can_validate_integer() {
 	 $convert = new WeightConvertor();
	 $result  = $convert->convertGramToKilogram(1);
	 $answer = $result-(0.001);
	 $this->assertLessThan(0.0001, $answer);
	}
	/**
	 *@test
	 * @expectedException InvalidArgumentException
	 */
	public function convertGramToKilogram_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() {
	 $convert = new WeightConvertor();
	 $convert->convertGramToKilogram("abc");
	}
   /**
	 *@test
	 */
	public function convertGramToKilogram_function_can_validate_negative_integer_argument() {
	 $convert = new WeightConvertor();
	 $result  = $convert->convertGramToKilogram(-1);
	 $answer = $result-(-0.001);
	 $this->assertLessThan(0.0001, $answer);
  }
  /**
   *@test
	 */
	public function convertGramToKilogram_function_can_validate_zero_number_argument() {
	 $convert = new WeightConvertor();
	 $result  = $convert->convertGramToKilogram(0);
 	 $this->assertEquals(0,$result);
  }
/**
	 *@test
	 */
	public function convertKilogramToGram_function_can_validate_integer_value() {
	 $convert = new WeightConvertor();
	 $result  = $convert->convertKilogramToGram(1);
	 $this->assertEquals(1000,$result);
  }
	/**
	 *@test
	 * @expectedException InvalidArgumentException
	 */
  public function convertKilogramToGram_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() {
	 $convert = new WeightConvertor();
	 $convert->convertKilogramToGram("abc");
	}
   /**
	 *@test
	 */
	public function convertKilogramToGram_function_can_accept_negative_integer_argument() {
	 $convert = new WeightConvertor();
	 $result  = $convert->convertKilogramToGram(-1);
	 $this->assertEquals(-1000,$result);
  }
  /**
   *@test
	 */
	public function convertKilogramToGram_function_can_accept_zero_number_argument() {
	 $convert = new WeightConvertor();
	 $result  = $convert->convertKilogramToGram(0);
	 $this->assertEquals(0,$result);
  }
  /**
	 *@test
	 */
	public function convertPoundToGram_function_can_validate_integer_value() {
	 $convert = new WeightConvertor();
	 $result  = $convert->convertPoundToGram(1);
	 $answer = $result-(453.592);
	 $this->assertLessThan(0.0001, $answer);
	}
	/**
	 *@test
	 * @expectedException InvalidArgumentException
	 */
	public function convertPoundToGram_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() {
	 $convert = new WeightConvertor();
	 $convert->convertPoundToGram("abc");
	}
   /**
	 *@test
	 */
  public function convertPoundToGram_function_can_validate_negative_integer_argument() {
 	 $convert = new WeightConvertor();
	 $result  = $convert->convertPoundToGram(-1);
	 $answer = $result-(-453.592);
	 $this->assertLessThan(0.0001, $answer);
  }
  /**
   *@test
	 */
	public function convertPoundToGram_function_can_validate_zero_number_argument() {
	 $convert = new WeightConvertor();
	 $result  = $convert->convertPoundToGram(0);
	 $answer = $result-(0);
	 $this->assertLessThan(0.0001, $answer);
  }
   /**
	 *@test
	 */
	public function convertGramToPound_function_can_validate_integer_value() {
	 $convert = new WeightConvertor();
	 $result  = $convert->convertGramToPound(1);
	 $answer = $result-(0.00220462);
	 $this->assertLessThan(0.0001, $answer);
	}
   /**
	 *@test
	 * @expectedException InvalidArgumentException
	 */
  public function convertGramToPound_function_should_throw_InvalidArgumentException_for_argument_which_Contain_string() {
	 $convert = new WeightConvertor();
	 $convert->convertGramToPound("abc");
	}
   /**
	 *@test
		 */
  public function convertGramToPound_function_can_validate_negative_integer_argument() {
	 $convert = new WeightConvertor();
	 $result  = $convert->convertGramToPound(-1);
	 $answer = $result-(-0.00220462);
	 $this->assertLessThan(0.0001, $answer);
 }
}

