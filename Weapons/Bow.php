<?php

namespace Weapons;

include_once 'Weapon.php';

class Bow extends Weapon
{
    private $stoic_arrows;

    public function __construct()
    {
        $this->damage = 20;
        $this->way_to_use = true;
        $this->stoic_arrows = 20;
        $this->protection = 0;
    }

    public function Battle()
    {
        $this->stoic_arrows = $this->stoic_arrows - 1;
    }
}

?>