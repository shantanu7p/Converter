<? php
namespace ConverterApp;
class Length extends Metric
{
 $fromPower,$toPower;
 public function __Length($from,$to)
 {
  switch ($from) 
	{
	 case "km":$fromPower=3;
	 			     break;
	 case "m" :$fromPower=0;
	  		     break;
	 case "cm":$fromPower=-2;
		  	     break;
	 case "mm":$fromPower=-3;
		         break;
	 default:
	}
  switch ($to) 
  {
	 case "km":$toPower=3;
	  		      break;
	 case "m" :$toPower=0;
	    		   break;
	 case "cm":$toPower=-2;
		  		   break;
	 case "mm":$toPower=-3;
		         break;
	 default:
  }
 }
}
