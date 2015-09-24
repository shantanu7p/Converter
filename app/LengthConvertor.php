<?php
namespace ConvertorApp;
class LengthConvertor {
	/*
	 *This function Converts the Input Length from Meter To Kilometer
	 */
	public function convertMeterToKilometer($length) {
		if (is_string($length)) {
			throw new \InvalidArgumentException("Please Enter valid Length");
		} elseif (is_null($length)) {
			throw new \InvalidArgumentException("Please Enter valid Length");
		}
		$KiloMeter = $length/1000;
		return $KiloMeter;
	}
  /*
	 * This function Converts the Input Length from Kilometer To Meter
	 */
	public function convertKilometerToMeter($length) {
		if (is_string($length)) {
			throw new \InvalidArgumentException("Please Enter valid Length");
		} elseif (is_null($length)) {
			throw new \InvalidArgumentException("Please Enter valid Length");
		}
		$Meter = $length*1000;
		return $Meter;
	}
  /*
	 * This function Converts the Input Length from Meter To Centimeter
	 */
	public function convertMeterToCentimeter($length) {
		if (is_string($length)) {
			throw new \InvalidArgumentException("Please Enter valid Length");
		} elseif (is_null($length)) {
			throw new \InvalidArgumentException("Please Enter valid Length");
		}
		$Centimeter = $length*100;
		return $Centimeter;
	}
	/*
	 * This function Converts the Input Length from Centimeter To Meter
	 */
	public function convertCentimeterToMeter($length) {
		if (is_string($length)) {
			throw new \InvalidArgumentException("Please Enter valid Length");
		} elseif (is_null($length)) {
			throw new \InvalidArgumentException("Please Enter valid Length");
		}
		$Meter = $length/100;
		return $Meter;
	}
}