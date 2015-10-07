<? php
namespace ConverterApp;
class Pound extends WeightImperial
{
public function convertPoundToKiloGram($unit)
{
 $this->argumentValidator($unit);
 $KiloGram = $unit * 0.453592;
 return $kiloGram;
}
public function convertKiloGramToPound($unit)
{
 $this->argumentValidator($unit);
 $pound = $unit / 0.453592;
 return $pound;
 }
public function convertPoundToGram($unit)
 {
  $this->argumentValidator($unit);
  $KiloGram = $unit * 453.592;
  return $kiloGram;
 }
 public function convertGramToPound($unit)
 {
  $this->argumentValidator($unit);
  $pound = $unit / 453.592;
  return $pound;
 }
}


