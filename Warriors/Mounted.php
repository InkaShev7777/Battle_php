<?php
    include_once 'Warrior.php';
    include_once 'Horses/Horse.php';
    class Mounted extends Warrior {
        private $horse; //конь это отдельный класс !

        public function __construct($name,$weapon,$health,$armor,$speed,$horse){
            $this->nameWarrior = $name;
            $this->weapon = $weapon;
            $this->horse = $horse;
            $this->health = $health + $this->horse->getHealth();
            $this->armor = $armor;
            $this->speed = $speed +  $this->horse->getSpeed();
        }

        function Attack()
        {
            echo "name: ".$this->nameWarrior." speed: ".$this->speed." helth: ".$this->health;
        }

        function Protection()
        {
            // TODO: Implement Protection() method.
        }

        function Moving()
        {
            // TODO: Implement Moving() method.
        }
    }
?>