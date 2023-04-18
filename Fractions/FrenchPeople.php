<?php
include_once 'Achivments/Achivment.php';
    class FrenchPeople extends Achivment{
        public function __construct(){
            $this->name = 'French';
            $this->health = 10;
            $this->protection = 5;
            $this->speed = 5;
        }
    }
?>