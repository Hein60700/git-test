<?php 
	$allName = array("Aung"=>"35","Mgmg"=>"25","hlahla"=>15);
	echo $allName["Mgmg"]."<br>";
	echo $allName["Aung"]."<br>";
	echo $allName["hlahla"]."<br>";

	foreach ($allName as $x => $x_value) {
		// code...
		echo "Key = ".$x."<br>"."Value = ".$x_value."<br>";
	}
 ?>