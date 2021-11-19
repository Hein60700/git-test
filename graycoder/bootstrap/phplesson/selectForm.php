<?php
    
    /*try {
        //code...
        $conn = new PDO("mysql:host=localhost;dbname=php","root","");
        $statement = $conn->prepare("SELECT  username, email, location FROM user WHERE id=1");
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC); //for return by array
        
            foreach($results as $result){
                echo $result["username"];
            }
    } catch (Exception $e) {
        //throw $th;
        echo "fail";
    }*/

    try {
        //code...
        $conn = new PDO("mysql:host=localhost;dbname=php","root","");
        $statement = $conn->prepare("SELECT * FROM user");
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $key => $value) {
            # code...\
            echo "$key is $value[email]";
        }
    } catch (Exception $e) {
        //throw $th;
        echo "fail";
    }
?>