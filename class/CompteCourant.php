<?php


class CompteCourant extends Compte {

    private bool $decouvert;
    private float $decouvertMax;

    public function __construct(Client $client, int $numero, float $solde, bool $decouvert) {
        parent::__construct( $client,$numero, $solde);
        $this->decouvert = $decouvert;
      }

      public function retrait($montant) {
        if($montant > 0){
            if($this->solde - $montant >= 0){
                $this->solde = $this->solde - $montant;
                echo "retrait de" . $montant
            }else{echo"retrait impossible"}
    }
}
    public function getFrais():float{
        $this->retrait(Compte::$cost)
        
        return Compte::$cost
    }
    /**
     * Get the value of decouvert
     */ 
    public function getDecouvert()
    {
        return $this->decouvert;
    }

    /**
     * Set the value of decouvert
     *
     * @return  self
     */ 
    public function setDecouvert($decouvert)
    {
        $this->decouvert = $decouvert;

        return $this;
    }

    /**
     * Get the value of decouvertMax
     */ 
    public function getDecouvertMax()
    {
        return $this->decouvertMax;
    }

    /**
     * Set the value of decouvertMax
     *
     * @return  self
     */ 
    public function setDecouvertMax($decouvertMax)
    {
        $this->decouvertMax = $decouvertMax;

        return $this;
    }
}
}