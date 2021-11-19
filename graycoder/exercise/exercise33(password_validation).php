<?php 
	if (isset($_POST['submit'])) {
		// code...
		$name = $_POST['fname'];
		if ($name) {
			// code...
			if (strlen($name)<3) {
				// code...
				echo "<font color='red'> Name is Less than 3 <font>";
			}
			else{
				echo "<font color = 'blue'>Welcome $name <font>";
			}
		}else{
			echo "<font color='red'>Your name is Empty<font>";
		}
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Gray Coder</title>
 </head>
 <body>
 	<form method="post">
 		<input type="text" name="fname" placeholder="Enter Your name"><br><br>
 		<input type="submit" name="submit">
 	</form>
 </body>
 </html>