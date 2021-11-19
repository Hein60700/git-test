<?php 
	if (isset($_POST['submit'])) {
		// code...
		$name = $_POST['userName'];
		$phone = $_POST['phoneNumber'];

		if ($name&&$phone) {
			// code...
			echo "<h3>Success<h3>";

		}
		else if (empty($name)&&$phone) {
			// code...
			echo "<h3>name value is empty<h3>";
		}
		else if (empty($phone)&&$name){
			echo "<h3>phone value is empty<h3>";
		}else{
			echo "<h3>both are empty<h3> ";
		}

	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Gray Voder</title>
 </head>
 <body>
 	<form action="exercise32(vil).php" method="post">
 		UserName:<input type="text" name="userName"><br><br>
 		Phone:<input type="text" name="phoneNumber"><br><br>
 		<input type="submit" name="submit">

 	</form>
 </body>
 </html>