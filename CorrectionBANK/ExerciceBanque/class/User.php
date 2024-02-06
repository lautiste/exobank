<?php
class User
{
     private string $numClient;
     private string $nom;
     private string $prenom;
     private DateTime $dateN;
     private string $email;
     private array $listComptes;

    /**
     * @param string $numClient
     * @param string $nom
     * @param string $prenom
     * @param DateTime $dateN
     * @param string $email
     */
    public function __construct(
        string $numClient,
        string $nom,
        string $prenom,
        DateTime $dateN,
        string $email
    )

    {
        $this->numClient = $numClient;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateN = $dateN;
        $this->email = $email;
        $this->listComptes = [];
    }


    public function getNumClient(): string
    {
        return $this->numClient;
    }

    public function setNumClient(string $numClient): void
    {
        $this->numClient = $numClient;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getDateN(): DateTime
    {
        return $this->dateN;
    }

    public function setDateN(DateTime $dateN): void
    {
        $this->dateN = $dateN;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getListComptes(): array
    {
        return $this->listComptes;
    }

    public function setListComptes(array $listComptes): void
    {
        $this->listComptes = $listComptes;
    }

    public function addCompte(
        BankAccount $compte
    ){
        //TODO FAIRE LA METHODE AJOUTER COMPTE
    }

    public function removeCompte($compte){
        //TODO FAIRE LA METHODE DE SUPPRESSION D'UN COMPTE
    }

    public  function __toString()
    {
        // TODO: Implement __toString() method.
    }


}