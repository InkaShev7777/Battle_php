<?php
    class Foot_Warrior extends Warrior{

        public function __construct($name,$weapon,$health,$armor,$speed,$fraction){
            $this->nameWarrior = $name;
            $this->weapon = $weapon;
            $this->health = $health + $fraction->get_health();
            $this->speed = $speed + $fraction->get_speed();
            $this->armor = $armor;
            $this->protection = 100 + ($this->weapon->getProtection() + $fraction->get_protection());
        }
    }
?>