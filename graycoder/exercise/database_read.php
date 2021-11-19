<?php 
	$severname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sample";
	$conn = mysqli_connect($severname,$username,$password,$dbname);
	if (!$conn) {
		// code...
		die("Connection fail".mysqli_connect_error());
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gray Coder</title>
</head>
<body>
	<table border="1px">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Age</th>
			<th>Address</th>
		</tr>
<?php 
	$query = "SELECT id, name, phone, age, address FROM customer";
	$queryresult = mysqli_query($conn,$query);
	if (!$queryresult) {
		// code...
		die("Query fail");
	}

	while ($row = $queryresult->fetch_assoc()) {
		// code...
 ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['age']; ?></td>
			<td><?php echo $row['address']; ?></td>
		</tr>
		<?php
	}
 ?>
		

	</table>
</body>
</html>