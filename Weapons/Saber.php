<?php

namespace Weapons;

include_once 'Weapon.php';

class Saber extends Weapon
{
    public function __construct()
    {
        $this->way_to_use = false;
        $this->damage = 30;
        $this->protection = 0;
    }

    public function Battle()
    {
        // TODO: Implement Battle() method.
    }
}

?>