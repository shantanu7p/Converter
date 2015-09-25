<?php
namespace ConvertorApp;
class TemperatureConvertor {
	/*
	 * This function Converts the Input temprature from fahrenhit to celsius
	*/
	public function convertFahrenhitToCelsius($temprature) {
		if (is_string($temprature)) {
			throw new \InvalidArgumentException("Please Enter valid Temprature");
		} elseif (is_null($temprature)) {
			throw new \InvalidArgumentException("Please Enter valid Temprature");
		}
		$Celsius = (5/9)*($temprature-32);
		return $Celsius;
	}
 
  /*
	 * This function Converts the Input temprature from celsius to fahrenhit
	*/
	public function convertCelsiusToFahrenhit($temprature) {
		if (is_string($temprature)) {
			throw new \InvalidArgumentException("Please Enter valid Temprature");
		} elseif (is_null($temprature)) {
			throw new \InvalidArgumentException("Please Enter valid Temprature");
		}
		$Fahrenhit = ($temprature*9/5)+32;
		return $Fahrenhit;
	}
	/*
	 * This function Converts the Input temprature from Kelvin to Celsius
	 */
	public function convertKelvinToCelsius($temprature) {
		if (is_string($temprature)) {
			throw new \InvalidArgumentException("Please Enter valid Temprature");
		} elseif (is_null($temprature)) {
			throw new \InvalidArgumentException("Please Enter valid Temprature");
		}
		$Celsius = $temprature-273.15;
		return $Celsius;
	}
	/*
	 * This function Converts the Input temprature from Celsius To Kelvin
	 */
	public function convertCelsiusToKelvin($temprature) {
		if (is_string($temprature)) {
			throw new \InvalidArgumentException("Please Enter valid Temprature");
		} elseif (is_null($temprature)) {
			throw new \InvalidArgumentException("Please Enter valid Temprature");
		}
		$Kelvin = $temprature+273.15;
		return $Kelvin;
	}
}







 