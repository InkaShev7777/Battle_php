<?php

namespace Squad;
class Squad
{
    private $name;
    private $min_count_warrior;
    private $max_count_warrior;
    private $squad;

    public function __construct($name_squad){
        $this->name = $name_squad;
        $this->min_count_warrior = 5;
        $this->max_count_warrior = 25;
        $this->squad = array();
    }
    public function Add_Warrior($new_warior){
        if(count($this->squad) <= $this->max_count_warrior){
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
            echo "ok";
        }
        else{
            echo "ne ok";
        }
    }
}

?>