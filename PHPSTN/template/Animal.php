<?php
     abstract class Animal implements AnimalInterface{
        public function eat(){
            echo "eat<br>";
        }
        public function sleep(){
            echo "sleep<br>";
        }
    } 
?>