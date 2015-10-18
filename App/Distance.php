<? php 
namespace ConverterApp;
class Distance extends Value
{
  public function __construct($value)
  {
    $this->sourceValue = $value;
  }
}
