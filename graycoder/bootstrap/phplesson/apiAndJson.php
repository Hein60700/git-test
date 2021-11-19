<?php
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,"https://jsonplaceholder.typicode.com/posts");
    curl_setopt($ch,CURLOPT_POST,0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $result = curl_exec($ch);

    $data = json_decode($result,true);
    foreach($data as $value){
        echo $value["title"]."<br>";
        echo "<hr>";
    }
?>