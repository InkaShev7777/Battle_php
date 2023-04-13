<?php
    class Horse{
        private $speed;
        private $health;

        public function __construct($speed,$health){
            $this->speed = $speed;
            $this->health = $health;
        }
        public function getSpeed(){
            return $this->speed;
        }
        public function getHealth(){
            return $this->health;
        }
    }
?>