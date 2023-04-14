<?php

namespace Weapons;

include_once 'Weapon.php';

class Sword_and_Shield extends Weapon
{
    public function __construct()
    {
        $this->damage = 50;
        $this->way_to_use = true;
        $this->protection = 40;
        // Дописать свойство защиты от щита !!! --- реализовать это в родителе!!!
    }

    public function Battle()
    {
        // TODO: Implement Battle() method.
    }
}

?>