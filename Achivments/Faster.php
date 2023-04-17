<?php
include_once 'Achivment.php';
    class Faster extends Achivment{
        public function __construct(){
            $this->name = "Faster";
            $this->protection = 0;
            $this->speed = 20;
            $this->health = 0;
        }
    }
?>