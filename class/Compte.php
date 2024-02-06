<?php

abstract class Compte{
    protected string $numero;
    protected string $client;
    protected int $solde;

    public static int $cost = 25;

  
    public function __construct(string $numero, string $client, int $solde){


        $this->numero = $numero;
        $this->client = $client;
        $this->solde = $solde;
    }

    public function retrait($montant) {
        if($montant > 0){
            if($this->solde - $montant >= 0){
                $this->solde = $this->solde - $montant;
                echo "retrait de" . $montant
            }else{echo"retrait impossible"}
    }
    public function depot($montant) {
        if($montant > 0){
            $this->solde = $this->solde + $montant;
            echo "depot de" . $montant;
        }
    public function virement ($montant,$destinataire){
        if($montant>0){
            if ($this->solde - $montant >= 0){
                $this->solde = $this->solde - $montant;
                $destinataire->depot($montant);
                echo "". $destinataire->depot($montant);
        }
    }
    public function __toString(){
        {
            echo "Numéro de compte : $this->numero<br>";
            echo "Solde : $this->solde euros<br>";
            echo "Frais de tenue de compte : " . $this->frais() . " euros/an<br>";
          }

    }

}





    }






    abstract public function getFrais();
    abstract public function retrait($montant);
    abstract public function alimentation($montant);
    abstract public function virement($compteDestinataire, $montant);







    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

        /**
         * Get the value of solde
         */ 
        public function getSolde()
        {
                return $this->solde;
        }

        /**
         * Set the value of solde
         *
         * @return  self
         */ 
        public function setSolde($solde)
        {
                $this->solde = $solde;

                return $this;
        }
}}






// <?php
// $t = time();
// $date = date("Y-m-d H:i:s", $t);
// $date = str_replace(array("-", ":", " "), "", $date);
// $date = substr($date, 0, 11);

// echo $date;
// ?>
