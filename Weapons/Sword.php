<?php

namespace Weapons;

include_once 'Weapon.php';

class Sword extends Weapon
{
    public function __construct()
    {
        $this->damage = 30;
        $this->way_to_use = false;
        $this->protection = 0;
    }

    public function Battle()
    {
        // TODO: Implement Battle() method.
    }
}

?>