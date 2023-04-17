<?php
include_once 'Achivment.php';
    class Defender extends Achivment{
        public function __constructor(){
            $this->name = "Defender";
            $this->health = 10;
            $this->protection = 25;
        }
    }
?>