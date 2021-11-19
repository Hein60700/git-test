<?php
    try {       
        $conn = new PDO("mysql:host=localhost;dbname=php","root","");
        $statement = $conn->prepare("UPDATE user SET
        email=:email
         WHERE id=:id");
         $id=2;
         $email="korea@gmail.com";
         $statement->bindParam(":email",$email);
         $statement->bindParam(":id",$id);
         $statement->execute();
         
    } catch (Exception $e) {
        echo "fail";
    }
?>