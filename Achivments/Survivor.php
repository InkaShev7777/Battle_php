<?php
include_once 'Achivment.php';
    class Survivor extends Achivment{
        public function __construct(){
            $this->name = "Survivor";
            $this->health = 30;
            $this->protection = 10;
        }
    }
?>