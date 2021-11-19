<?php 
	if (isset($_POST['submit'])) {
		// code...
		$name = $_POST['fname'];
		if (empty($name)) {
			// code...
			echo "This is Empty";
		}else{
			echo $name;
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
		<form action="exercise31($post).php" method="post">
			Name:<input type="text" name="fname"><br>
			<input type="submit" name="submit">
		</form>
</body>
</html>