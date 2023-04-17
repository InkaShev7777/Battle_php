<?php
    class Commander extends Warrior{
        private $achivements;

        public function __construct($name){
            $this->nameWarrior = $name;
            $this->achivements = array();
        }
        public function Add_Achivments($achiv){
            array_push($this->achivements,$achiv);
        }
        public function get_Achivments(){
            return $this->achivements;
        }
    }
?>