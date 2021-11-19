<?php
    if(isset($_SERVER['PHP_AUTH_USER'])){
        if($_SERVER['PHP_AUTH_USER']=='admin' &&
        $_SERVER['PHP_AUTH_PW']=='123456'){
            $array = ["mgmg","aungaung","koko"];
            echo json_encode($array);
        }
        else{
            echo'please check user name and pw';
        }
    }else{
        echo "this page is protected by http";
    }
    

   
?>