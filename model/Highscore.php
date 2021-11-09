<?php

class Highscore {
    private $id;
    private $name;
    private $score; 
    private $game; 

    public function __construct($id, $name, $score, $game) {
        $this->id = $id;
        $this->name = $name;
        $this->score = $score;
        $this->game = $game;
     
    }

    public function getID() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getScore() {
        return $this->score;
    }

    public function getGame() {
        return $this->game;
    }

}

?>