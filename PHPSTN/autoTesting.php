<?php
declare(strict_types = 1);
error_reporting(E_ALL);
 ini_set("display_errors",'1');

    define("DD",realpath("."));

    require DD . "/autoload.php";

    $bee = new Bee();
    $bee->makeHoney();
    echo "<br>";
    $user = new User();
    $user->name="aungmyat";
    echo $user->name;
?>