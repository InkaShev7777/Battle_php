<?php
include_once 'Achivments/Achivment.php';
    class English extends Achivment{
        public function __construct(){
            $this->name = "English";
            $this->health = 10;
            $this->protection = 10;
            $this->speed = 0;
        }
    }
?>