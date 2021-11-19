<?php
    try {
        //code...
        $conn = new PDO("mysql:host=localhost;dbname=php","root","");
        $statement = $conn->prepare("DELETE FROM user WHERE id=:id");
        $id = 20;
        $statement->bindParam(":id",$id);
        $statement->execute();
    } catch (Exception $e) {
        //throw $th;
        echo "fail";
    }
?>