<?php 
if (isset($_POST['submit'])) {
	// code...
	$severname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sample";
	$con = mysqli_connect($severname,$username,$password,$dbname);/////////////////main
	if (!$con) {
		// code...
		die("Connection fail".mysqli_connect_error());
	}
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$age = $_POST['age'];
	$address = $_POST['address'];

	$query = "INSERT INTO customer( name, phone, age, address) VALUES ('$name','$phone','$age','$address')";
	mysqli_query($con,$query);////////////////////////////////////////main
	if (!$query) {
		// code...
		die("Query fail");
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
		<form action="database_inset.php" method="post">
			Name:<input type="text" name="name"><br><br>
			Phone:<input type="text" name="phone"><br><br>
			Age:<input type="number" name="age"><br><br>
			Address:<input type="text" name="address"><br><br>
			<input type="submit" name="submit">
		</form>
</body>
</html>