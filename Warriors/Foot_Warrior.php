<?php
    class Foot_Warrior extends Warrior{

        public function __construct($name,$weapon,$health,$armor,$speed){
            $this->nameWarrior = $name;
            $this->weapon = $weapon;
            $this->health = $health;
            $this->speed = $speed;
            $this->armor = $armor;
            $this->protection = 100 + $this->weapon->getProtection();
        }
    }
?>