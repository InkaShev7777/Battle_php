<?php

namespace Armor;

include_once 'Armor.php';

class Lamellar extends Armor
{
    public function __construct()
    {
        $this->material = "lamellar";
        $this->protection = 80;
    }
}

?>