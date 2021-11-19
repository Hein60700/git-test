<?php
    $array = [
        [
            "name"=>"mg mg",
            "age"=>20,
            "city"=>"yangon"
        ]
        ,
        [
            "name"=>"ag ag",
            "age"=>24,
            "city"=>"korea"
        ]
        ];
    $data = json_encode($array);
    echo $data;
?>