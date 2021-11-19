<?php 
	if (isset($_POST['submit'])) {
		// code...
		$filename = $_FILES['filename']['name'];
		$filetype = $_FILES['filename']['type'];
		$filesize = $_FILES['filename']['size'];
		move_uploaded_file($_FILES['filename']['tmp_name'], 'testfile/'.$filename);
		if (empty($filename)) {
			// code...
			echo "your file is empty";
		}
		else{
			echo "File Name = ".$filename."<br>";
		echo "File Type = ".$filetype."<br>";
		echo "File Size = ".$filesize."<br>";
		}
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Gay Coder</title>
 </head>
 <body>
 	<form action="exercise34(file_upload).php" method="post" enctype="multipart/form-data">
 		filename:<input type="file" name="filename"><br><br>
 		<input type="submit" name="submit">
 	</form>
 </body>
 </html>