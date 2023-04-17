<?php
    abstract class Achivment{
        protected $name;
        protected $health;
        protected $speed;
        protected $protection;

        public function get_health(){
            return $this->health;
        }
        public function get_speed(){
            return $this->speed;
        }
        public function get_protection(){
            return $this->protection;
        }
    }
?>