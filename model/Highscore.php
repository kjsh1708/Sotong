<?php

class Highscore {
    private $id;
    private $name;
    private $RLGL;
    private $TOW;
    private $Marble;
    private $Glass;

    public function __construct($id, $name, $RLGL,$TOW , $Marble, $Glass) {
        $this->id = $id;
        $this->name = $name;
        $this->RLGL=$RLGL;
        $this->TOW=$TOW;
        $this->Marble=$Marble;
        $this->Glass=$Glass;
     
    }

    public function getID() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
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