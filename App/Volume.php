<? php
namespace ConverterApp;
class Volume extends Metric
{
 $fromPower,$toPower;
 public function __Volume($from,$to)
 {
	switch ($from) 
  {
	 case "l" :$fromPower=3;
				     break;
	 case "ml":$fromPower=0;
				     break;
	 case "cl":$fromPower=-2;
				     break;
	 default:
	}
  switch ($to) 
  {
	 case "l" :$toPower=3;
				     break;
	 case "ml":$toPower=0;
				     break;
	 case "cl":$toPower=-2;
				     break;
	 default:
	}
 }
}