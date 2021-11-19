<?php
    function autoloadContracts($name){
        $fileName = DD."/contracts/".$name.".php";
        if(is_readable($fileName)){
            require $fileName;
        }
    }
    function autoloadTemplates($name){
        $fileName = DD."/template/".$name.".php";
        if(is_readable($fileName)){
            require $fileName;
        }
    }
    function autoloadModels($name){
        $filename = DD."/models/".$name.".php";
        if (is_readable($filename)) {
            # code...
            require $filename;
        }
    }
    spl_autoload_register("autoloadContracts");
    spl_autoload_register("autoloadTemplates");
    spl_autoload_register("autoloadModels");
?>