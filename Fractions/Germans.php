<?php
include_once 'Achivments/Achivment.php';
    class Germans extends Achivment{
        public function __construct(){
            $this->name = "Germans";
            $this->health = 5;
            $this->protection = 0;
            $this->speed = 0;
        }
    }
?>