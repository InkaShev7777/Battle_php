<?php

namespace Weapons;

include_once 'Weapon.php';

class Halderd extends Weapon
{
    public function __construct()
    {
        $this->damage = 40;
        $this->way_to_use = false;
        $this->protection = 0;
    }

    public function Battle()
    {
        // TODO: Implement Battle() method.
    }
}

?>