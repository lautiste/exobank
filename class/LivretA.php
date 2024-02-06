<?php

class LivretA extends Compte implements ICalc {
    private float $tauxepargne;

    public function __construct(string $numero,string $client,float $tauxepargne) {

    public function calculInteret() {
       
    }

    /**
     * Get the value of tauxepargne
     */ 
    public function getTauxepargne()
    {
        return $this->tauxepargne;
    }

    /**
     * Set the value of tauxepargne
     *
     * @return  self
     */ 
    public function setTauxepargne($tauxepargne)
    {
        $this->tauxepargne = $tauxepargne;

        return $this;
    }
}