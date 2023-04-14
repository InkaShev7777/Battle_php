<?php

namespace Horses;
class Horse
{
    private $speed;
    private $health;

    public function __construct()
    {
        $this->speed = 20;
        $this->health = 100;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getHealth()
    {
        return $this->health;
    }
}

?>