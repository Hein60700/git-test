<?php
    try {
        //code...
        $conn = new PDO("mysql:host=localhost;dbname=php","root","");
        $statement = $conn->prepare("SELECT *
        FROM user
        RIGHT JOIN posts
        ON user.id = posts.user_id");

        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        var_dump($results);
        
        echo "<h1>$</h1>";
        
    } catch (Exception $e) {
        //throw $th;
        echo "fail";
    }
?>