<?php
    abstract class Warrior{
        protected $nameWarrior;
        protected $weapon;
        protected $health;
        protected $armor;
        protected $speed;

        abstract function Attack();
        abstract function Protection();
        abstract function Moving();
    }
?>