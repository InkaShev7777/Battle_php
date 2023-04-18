<?php

use Armor\Armor_Textile;
use Horses\Horse;
use Weapons\Axe;
use Weapons\Bow;
use Squad\Squad;

include_once 'Warriors/Mounted.php';
include_once 'Weapons/Axe.php';
include_once 'Weapons/Bow.php';
include_once 'Armor/Armor_Textile.php';
include_once 'Squad/Squad.php';
include_once 'Warriors/Commander.php';
include_once 'Achivments/Faster.php';
include_once 'Battlefild/Battlefild.php';


//
//  Добавить оружию свойство дистанции!
//

$wer = new Mounted('Ilya',new Axe(),100,new Armor_Textile(),20,new Horse());
$wer2 = new Mounted('Burunduk',new Bow(),100,new Armor_Textile(),20,new Horse());
//$wer2->Moving();
//echo "<p>----------------------------------------------------------</p>";
////$wer2->Attack($wer);
////echo "<p>----------------------------------------------------------</p>";
////$wer->Moving();
////echo "<p>----------------------------------------------------------</p>";
////$wer->Protection();
$comander = new Commander('testCommander');
$comander->Add_Achivments(new Faster());
$sq = new Squad('Test',$comander);
$sq->Add_Warrior($wer);
$sq->Add_Warrior($wer2);
//$wer2->Moving();

$wer3 = new Mounted('Ilya2',new Axe(),100,new Armor_Textile(),20,new Horse());
$wer4 = new Mounted('Burunduk2',new Bow(),100,new Armor_Textile(),20,new Horse());
$comander2 = new Commander('comander2');
$sq2 = new Squad('test2',$comander2);
$sq2->Add_Warrior($wer4);
$sq2->Add_Warrior($wer3);

$bt = new Battlefild($sq,$sq2,true);
$bt->Battle();

?>