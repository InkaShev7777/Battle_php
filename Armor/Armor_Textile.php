<?php

namespace Armor;

include_once 'Armor.php';

class Armor_Textile extends Armor
{
    public function __construct()
    {
        $this->material = "Textile";
        $this->protection = 5;
    }
}

?>