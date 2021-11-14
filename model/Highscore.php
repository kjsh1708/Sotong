<?php

class Highscore {
    private $name;
    private $rlgl;
    private $tow;
    private $marble;
    private $glass;
    private $total;

    public function __construct($name, $rlgl, $tow , $marble, $glass, $total) {
        $this->name = $name;
        $this->rlgl = $rlgl;
        $this->tow = $tow;
        $this->marble = $marble;
        $this->glass = $glass;
        $this->total = $total;
     
    }

    public function getName() {
        return $this->name;
    }

    /**
     * Get the value of RLGL
     */ 
    public function getRLGL()
    {
        return $this->rlgl;
    }

    /**
     * Get the value of TOW
     */ 
    public function getTOW()
    {
        return $this->tow;
    }

    /**
     * Get the value of Marble
     */ 
    public function getMarble()
    {
        return $this->marble;
    }

    /**
     * Get the value of Glass
     */ 
    public function getGlass()
    {
        return $this->glass;
    }

    /**
     * Get the value of totalScore
     */ 
    public function getTotal()
    {
        return $this->total;
    }
}

?>