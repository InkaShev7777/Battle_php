<?php

namespace Armor;
abstract class Armor
{
    protected $protection;
    protected $material;

    public function getProtect()
    {
        return $this->protection;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}

?>