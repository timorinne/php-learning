<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
  <html>
  	<head>
  		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  			<title>NetBeans PHP debugging sample</title>
		</head>
<body>
	<?php
  	$m=5;
  	$n=10;
  	  $sum_of_factorials = calculate_sum_of_factorials ($m, $n);
  	  echo "The sum of factorials of the entered integers is " . $sum_of_factorials;
  	
	    function calculate_sum_of_factorials ($argument1, $argument2) {
  	 	$factorial1 = calculate_factorial ($argument1);
  	 	$factorial2 = calculate_factorial ($argument2);
  	 	$result = calculate_sum ($factorial1, $factorial2);
  	 	return $result;
  		}
	
	  function calculate_factorial ($argument) {
  	  	$factorial_result = 1;
  	 	for ($i=1; $i<=$argument; $i++) {
  	 		$factorial_result = $factorial_result*$i;
  	 	}
  			return $factorial_result;
  		}
	  
	    function calculate_sum ($argument1, $argument2) {
 			return $argument1 + $argument2;
     	}	
?>
  </body>
</html>