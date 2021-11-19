<?php
  
   try {
       //code...
       $conn = new PDO("mysql:host=localhost;dbname=php","root","");
    //    $conn->exec("INSERT INTO user( username, email, location) 
    //    VALUES ('aungmyat','aungmyat6070@gmail.com','korea')");
    $statement = $conn->prepare("INSERT INTO user( username, email, location) 
        VALUES (:username,:email,:location)");
       
       $username="jj";
       $email = "jj@gmial.com";
       $location = "mdy";
    $statement->bindParam(":username",$username);
    $statement->bindParam(":email",$email);
    $statement->bindParam(":location",$location);
    $statement->execute();
   } catch (Exception $e) {
       //throw $th;
       echo "Connection fail";
   }
?>