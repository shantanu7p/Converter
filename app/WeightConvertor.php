<?php
namespace ConvertorApp;
class WeightConvertor {
	/*
	 * This function Converts the Input Weight from Gram To Kilogram
	 */
	public function convertGramToKilogram($weight) {
		if (is_string($weight)) {
			throw new \InvalidArgumentException("Please Enter valid Weight");
		} elseif (is_null($weight)) {
			throw new \InvalidArgumentException("Please Enter valid Weight");
		}
		$Kilogram = $weight/1000;
		return $Kilogram;
	}
	/*
	 * This function Converts the Input Weight from Kilogram To Gram
	 */
	public function convertKilogramToGram($weight) {
		if (is_string($weight)) {
			throw new \InvalidArgumentException("Please Enter valid Weight");
		} elseif (is_null($weight)) {
			throw new \InvalidArgumentException("Please Enter valid Weight");
		}
		$Gram = $weight*1000;
		return $Gram;
	}
	/*
	 * This function Converts the Input Weight from Pound To Gram
	 */
	public function convertPoundToGram($weight) {
		if (is_string($weight)) {
			throw new \InvalidArgumentException("Please Enter valid Weight");
		} elseif (is_null($weight)) {
			throw new \InvalidArgumentException("Please Enter valid Weight");
		}
		$Gram = $weight*453.592;
		return $Gram;
	}
	/*
	 * This function Converts the Input Weight from  Gram To Pound
	 */
	public function convertGramToPound($weight) {
		if (is_string($weight)) {
			throw new \InvalidArgumentException("Please Enter valid Weight");
		} elseif (is_null($weight)) {
			throw new \InvalidArgumentException("Please Enter valid Weight");
		}
		$Pound = $weight/453.592;
		return $Pound;
	}
}