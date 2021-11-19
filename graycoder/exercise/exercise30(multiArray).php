<?php 
	$fruits = array(
		array("Apple",22,18),
		array("Orange",21,42),
		array("Mango",1,2),
		array("Banana",3,4)
	);
	echo $fruits[3][0]."<br>";
	$length = count($fruits);
	for ($i=0; $i < $length; $i++) { 		
		for ($j=0; $j < count($fruits[$i]) ; $j++) { 
			// code...
			echo $fruits[$i][$j]."<br>";
		}
	}
 ?>