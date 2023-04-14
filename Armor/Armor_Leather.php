<?php

namespace Armor;

include_once 'Armor.php';

class Armor_Leather extends Armor
{
    public function __construct()
    {
        $this->protection = 20;
        $this->material = "Leather";
    }
}

?>