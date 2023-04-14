<?php

namespace Weapons;
abstract class Weapon
{
    protected $damage;
    protected $way_to_use;

    protected $protection;

    public abstract function Battle();

    public function getDamage()
    {
        return $this->damage;
    }

    public function getProtection()
    {
        return $this->protection;
    }
}

?>