<?php
    include_once 'Warrior.php';
    include_once 'Horses/Horse.php';
    include_once 'Weapons/Weapon.php';
    include_once 'Armor/Armor.php';
    include_once 'Achivments/Achivment.php';
    class Mounted extends Warrior {
        private $horse; //конь это отдельный класс !

        public function __construct($name,$weapon,$health,$armor,$speed,$horse,$fraction){
            $this->nameWarrior = $name;
            $this->weapon = $weapon;
            $this->horse = $horse;
            $this->armor = $armor;
            $this->health = $health + ($this->horse->getHealth() + $this->armor->getProtect() + $fraction->get_health());
            $this->speed = $speed + ($this->horse->getSpeed() + $fraction->get_speed());
            $this->protection = 100 + ($this->weapon->getProtection() + $fraction->get_protection());
        }
    }
?>