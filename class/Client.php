<?php
require_once('interface/ICalc.php');

// class Client extends Compte implements ICalc {
    

// }
class Client {
    private string $identifiant;
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private $email;
    private $comptes = [];

    public function __construct($identifiant, $nom, $prenom, $dateNaissance, $email) {
        $this->identifiant = $identifiant;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->email = $email;
    }

    public function ajouterCompte($compte) {
        if (count($this->comptes) < 3) {
            array_push($this->comptes, $compte);
        } else {
            echo "Un client ne peut pas avoir plus de trois comptes.";
        }
    }

    public function removeComptes($compte) {
        if (count($this->comptes) > 3) {
            unset($this->comptes[$compte]);
        }}



    public function __toString(){

    }


    /**
     * Get the value of identifiant
     */ 
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set the value of identifiant
     *
     * @return  self
     */ 
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of comptes
     */ 
    public function getComptes()
    {
        return $this->comptes;
    }

    /**
     * Set the value of comptes
     *
     * @return  self
     */ 
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;

        return $this;
    }
}