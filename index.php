<?php

use Armor\Armor_Textile;
use Horses\Horse;
use Weapons\Axe;
use Weapons\Bow;

include_once 'Warriors/Mounted.php';
include_once 'Weapons/Axe.php';
include_once 'Weapons/Bow.php';
include_once 'Armor/Armor_Textile.php';

//
//  Добавить оружию свойство дистанции!
//

$wer = new Mounted('Ilya',new Axe(),100,new Armor_Textile(),20,new Horse());
$wer2 = new Mounted('Burunduk',new Bow(),100,new Armor_Textile(),20,new Horse());
$wer->Attack($wer2);
echo "<p>----------------------------------------------------------</p>";
$wer2->Attack($wer);
echo "<p>----------------------------------------------------------</p>";
$wer->Moving();
echo "<p>----------------------------------------------------------</p>";
$wer->Protection();
?>