<?php 
	$severname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sample";
	$conn = mysqli_connect($severname,$username,$password,$dbname);
	if (!$conn) {
		// code...
		die("Connection fail");
	}
	if (isset($_POST['submit'])) {
		// code...
		$id = $_POST['id'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$age = $_POST['age'];
		$address = $_POST['address'];

		$query = "UPDATE testcustomer SET name='$name',phone='$phone',age='$age',address='$address' WHERE id='$id'";
		$query_result = mysqli_query($conn,$query);
		if (!$query_result) {
			// code...
			die("query fail");
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
	<form action="testUpdate.php" method="post">
		Name:<input type="text" name="name"><br><br>
		Phone:<input type="text" name="phone"><br><br>
		Age:<input type="text" name="age"><br><br>
		Address:<input type="text" name="address"><br><br>
		<select name="id">
			<?php 
				$query = "SELECT id, name FROM testcustomer";
				$query_result = mysqli_query($conn,$query);
				if (!$query_result) {
					// code...
					die("Query fail");
				}
				while ($row = $query_result->fetch_assoc()) {
					// code...
					$id = $row['id'];
					$name = $row['name'];
					?>
					<option value="<?php echo $id;?>"><?php echo $name;?></option>
					<?php
				}
			 ?>
			
		</select><br><br>
		<input type="submit" name="submit" value="Update">
	</form>
</body>
</html>