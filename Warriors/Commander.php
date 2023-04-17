<?php
    class Commander extends Warrior{
        private $achivements;

        public function __construct($name){
            $this->nameWarrior = $name;
            $this->achivements = array();
        }
    }
?>