<?php

namespace Squad;
include_once 'Warriors/Commander.php';
class Squad
{
    private $name;
    private $min_count_warrior;
    private $max_count_warrior;
    private $squad;
    private $commander;

    public function __construct($name_squad,$commander){
        $this->name = $name_squad;
        $this->min_count_warrior = 5;
        $this->max_count_warrior = 25;
        $this->squad = array();
        $this->commander = $commander;
    }
    public function Add_Warrior($new_warior){
        if(count($this->squad) <= $this->max_count_warrior){
            $list_achiv = $this->commander->get_Achivments();
            foreach ($list_achiv as $item){
                $new_warior->update_health($item->get_health());
                $new_warior->update_speed($item->get_speed());
                $new_warior->update_protection($item->get_protection());
            }
            array_push($this->squad,$new_warior);
        }
        else{
            echo ":-(";
        }
    }
    public function Delete_Warrior(){
        if($this->squad != null){
            echo " squad ok";
        }
        else{
            echo "squad ne ok";
        }
    }
    public function Get_Info(){
        if(count($this->squad) >= $this->min_count_warrior && count($this->squad) <= $this->max_count_warrior){
            foreach ($this->squad as $item){
                echo $item->get_name()."<br>";
            }
            echo "ok";
        }
        else{
            echo "ne ok";
        }
    }
    public function getSquad(){
        return $this->squad;
    }
    public function getCommander(){
        return $this->commander;
    }
}

?>