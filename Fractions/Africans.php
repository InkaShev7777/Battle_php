<?php
include_once 'Achivments/Achivment.php';
    class Africans extends Achivment{
        public function __construct(){
            $this->name = "Africans";
            $this->health = 15;
            $this->protection = 10;
            $this->speed = 20;
        }
    }
?>