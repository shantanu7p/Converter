<? php
namespace ConverterApp;
class Weight extends Metric
{
 $fromPower,$toPower;
 public function __Weight($from,$to)
 {
	switch ($from) 
	{
	 case "kg":$fromPower=3;
				      break;
	 case "g" :$fromPower=0;
				     break;
	 case "mg":$fromPower=-3;
		         break;
	 default:
	}
  switch ($to) 
  {
	 case "kg":$toPower=3;
				     break;
	 case "g" :$toPower=0;
				     break;
	 case "mg":$toPower=-3;
		         break;
	 default:
  }
 }
}