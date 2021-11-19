<?php
    $ch = curl_init("http://localhost/graycoder/bootstrap/phplesson/apiTestForm.php");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

    //http basic auth
    curl_setopt($ch,CURLOPT_USERPWD,'admin:123456');//pasing by username and password


    $result = curl_exec($ch);
    echo $result;
?>