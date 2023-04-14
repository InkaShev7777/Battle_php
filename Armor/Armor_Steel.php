<?php

namespace Armor;

include_once 'Armor.php';

class Armor_Steel extends Armor
{
    public function __construct()
    {
        $this->material = "Steel";
        $this->protection = 80;
    }
}

?>