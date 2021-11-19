<?php
    // class Dog{
    //     private $name;
    //     public $color;
    //     protected $legs;
    //     public $heavy_loaded;
    //     public function __construct(String $name,String $color,int $legs) {
    //         $this->name = $name;
    //         $this->color = $color;
    //         $this->legs = $legs;
    //         $this->connect();
    //     }
    //     public function connect(){
    //         $this->heavy_loaded = "Big thing created";
    //         echo "im CONNECT heavy loaded";
    //         echo "<br>";
    //     }
    //     public function __sleep(){
    //         return ['name','color','legs'];
    //     }
    //     public function __wakeup()
    //     {
    //         $this->connect();
    //     }
    // }
    // $dog = new Dog("aung net", "black", 4);
    // echo $dog->heavy_loaded."<br>";
    // $s_dog = serialize($dog);
    // $u_dog = unserialize($s_dog);
    // //echo "<br>";
    // echo $s_dog;
    // echo "<br>";
    // echo $u_dog->heavy_loaded."<br>";
    // echo $u_dog->color;
    // echo "<br>";
    
?>