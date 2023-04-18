<?php
include_once 'Squad/Squad.php';
include_once 'Warriors/Warrior.php';
    class Battlefild{
        private $weather;
        private $first_squad;
        private $second_squad;
        private $first_commander;
        private $second_commander;

        public function __construct($first_squad,$second_squad,$weather){
            $this->first_squad = $first_squad->getSquad();
            $this->second_squad = $second_squad->getSquad();
            $this->first_commander = $first_squad->getCommander();
            $this->second_commander = $second_squad->getCommander();
            $this->weather = $weather;
        }

        public function Battle(){
            do{
                echo "Start <br>";
                $this->first_squad[$this->randWarrior($this->first_squad)]->Attack($this->second_squad[$this->randWarrior($this->second_squad)]);
                $this->updateSquads();
                if(count($this->first_squad) == 0 || count($this->second_squad) == 0){
                    if(count($this->first_squad) == 0){
                        echo "<h1 style='color: green'>Winner Second Squad</h1>";
                    }
                    elseif (count($this->second_squad)==0){
                        echo "<h1 style='color: green'>Winner First Squad</h1>";
                    }
                    break;
                }
                echo "<br>____________________________________<br>";
                $this->second_squad[$this->randWarrior($this->second_squad)]->Attack($this->first_squad[$this->randWarrior($this->first_squad)]);
                $this->updateSquads();
                if(count($this->second_squad) == 0 || count($this->first_squad) == 0 ){
                    if(count($this->first_squad) == 0){
                        echo "<h1 style='color: green'>Winner Second Squad</h1>";
                    }
                    elseif (count($this->second_squad)==0){
                        echo "<h1 style='color: green'>Winner First Squad</h1>";
                    }
                    break;
                }
                echo "<br>____________________________________<br>";
            }while(count($this->first_squad) != 0 || count($this->second_squad));
        }
        private function randWarrior($squad){
            return rand(0,count($squad)-1);
        }
        private function updateSquads(){
            $fir_ms = array();
            $sec_mas = array();
            foreach ($this->first_squad as $fr){
                if($fr->isLive()==true){
                    array_push($fir_ms,$fr);
                }
                else{
                    echo "<h2 style='color: red'>Player:".$fr->get_name()." DEAD</h2>";
                }
            }
            $this->first_squad = $fir_ms;
            foreach ($this->second_squad as $se){
                if($se->isLive()==true){
                    array_push($sec_mas,$se);
                }
                else{
                    echo "<h2 style='color: red'>Player:".$se->get_name()." DEAD</h2>";
                }
            }
            $this->second_squad = $sec_mas;
        }
        private function CommandersDeath($commander){
            $ProbabilityOfDeath = rand(0,100);
            if($commander->isLive() == true){
                if($ProbabilityOfDeath < 5){
                    $commander->update_health(-10);
                }
                if($commander->isLive() == false){
                    echo "Commander death";
                }
            }
        }
    }
?>