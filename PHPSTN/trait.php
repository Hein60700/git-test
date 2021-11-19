<?php
//     declare(strict_types = 1);
//     error_reporting(E_ALL);
//     ini_set("display_errors",'1');

//     trait superPower{
//         public $talk = "hello world";
//         public function makeSpell(String $type){
//             echo "<h1>im makespell fun and my class is spower <br>
//              my type is $type</h1>";
//         }
//         public function makeFoo(){
//             echo "<h1>im makeFoo fun and my class is spower</h1>";
//         }
//     }

//     interface AnimalInterface{
//         public function eat();
//         public function sleep();
//     }
//     interface DogInterface{
//         public function bark();
//     }
//     abstract class Animal implements AnimalInterface {
//         public $name;
//         public function __construct(String $name) {
//             $this->name = $name;
//         }
//         public function eat()
//         {
//             # code...
//             echo "<h1>im Animal im eating</h1>";
//         }
//         public function sleep()
//         {
//             # code...
//             echo "<h1>im Animal im sleeping</h1>";
//         }
//     }
//     class Dog extends Animal implements DogInterface{
//         use superPower;
//         public function __construct(String $name) {
//             parent::__construct($name);
//         }
//         public function bark()
//         {
//             # code...
//             echo "<h1>im barking<h1>";
//         }
//     }
//    $dog = new Dog("aung net");
//    $dog->eat();
//    $dog->sleep();
//    $dog->bark();
//    $dog->makeSpell("water");
//    $dog->makeFoo();
//    echo $dog->talk;
?>