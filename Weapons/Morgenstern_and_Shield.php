<?php

namespace Weapons;

include_once 'Weapon.php';

class Morgenstern_and_Shield extends Weapon
{
    public function __construct()
    {
        $this->damage = 70;
        $this->way_to_use = true;
        $this->protection = 60;
    }

    public function Battle()
    {
        // TODO: Implement Battle() method.
    }
}

?>