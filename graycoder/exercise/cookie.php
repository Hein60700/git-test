<?php 
	$cookie_name = "user";
	$cookie_value = "Gray Coder";
	$expire  = time()+(300);
	setcookie($cookie_name,$cookie_value,$expire);
	// if (isset($_COOKIE)) {
	// 	// code...
	// 	echo $cookie_name;
	// 	echo $cookie_value;
	// }
	// else{
	// 	echo "is not yet";
	// }
	if (count($_COOKIE)>0) {
		// code...
		echo "cookie is open";
	}else{
		echo "cookie is close";
	}
 ?>