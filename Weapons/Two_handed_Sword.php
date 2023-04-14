<?php

namespace Weapons;

include_once 'Weapon.php';

class Two_handed_Sword extends Weapon
{
    public function __construct()
    {
        $this->damage = 80;
        $this->way_to_use = true;
        $this->protection = 0;
    }

    public function Battle()
    {
        // TODO: Implement Battle() method.
    }
}

?>