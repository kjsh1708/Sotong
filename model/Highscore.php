<?php

class Highscore {
    private $ID;
    private $Name;
    private $RLGL;
    private $TOW;
    private $Marble;
    private $Glass;

    public function __construct($ID, $Name, $RLGL,$TOW , $Marble, $Glass) {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->RLGL=$RLGL;
        $this->TOW=$TOW;
        $this->Marble=$Marble;
        $this->Glass=$Glass;
     
    }

    public function getID() {
        return $this->ID;
    }

    public function getName() {
        return $this->Name;
    }

    /**
     * Get the value of RLGL
     */ 
    public function getRLGL()
    {
        return $this->RLGL;
    }

    /**
     * Get the value of TOW
     */ 
    public function getTOW()
    {
        return $this->TOW;
    }

    /**
     * Get the value of Marble
     */ 
    public function getMarble()
    {
        return $this->Marble;
    }

    /**
     * Get the value of Glass
     */ 
    public function getGlass()
    {
        return $this->Glass;
    }
}

?>