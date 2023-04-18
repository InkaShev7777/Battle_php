<?php
include_once 'Squad/Squad.php';
    class Battlefild{
        private $weather;
        private $first_squad;
        private $second_squad;

        public function __construct($first_squad,$second_squad,$weather){
            $this->first_squad = $first_squad->getSquad();
            $this->second_squad = $second_squad->getSquad();
            $this->weather = $weather;
        }

        public function Battle(){
            $count_warrior_first = count($this->first_squad);
            $count_warrior_second = count($this->second_squad);
            if($count_warrior_first >= $count_warrior_second){
                for($i=0;$i<$count_warrior_first;$i++){
                    $this->first_squad[$i]->Attack($this->second_squad[$i]);
                    echo "---------------";
                    $this->second_squad[$i]->Attack($this->first_squad[$i]);
                    echo "---------------";

                }
            }
        }
    }
?>