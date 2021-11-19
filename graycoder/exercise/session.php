<?php 
	session_start();
	$_SESSION['favcolor'] = "pink";
	$_SESSION['favanimal'] = "cat";

	if (!$_SESSION) {
		// code...
		echo "session erroe";
	}
 ?>