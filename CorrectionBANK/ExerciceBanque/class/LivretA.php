<?php
class  LivretA extends BankAccount implements  IEpargne{

    private  float $tauxEpargne;

    public function  __construct(
        string $accountNumber,
        float $balance,
        User $user,
        float $tauxEpargne
    )
    {
        parent::__construct($accountNumber, $balance, $user);
        $this->tauxEpargne = $tauxEpargne;
    }

    public function getTauxEpargne(): float
    {
        return $this->tauxEpargne;
    }

    public function setTauxEpargne(float $tauxEpargne): void
    {
        $this->tauxEpargne = $tauxEpargne;
    }

    public function calculEpargne(): float
    {
     //TODO IMPLEMENTER LA FONCTION CALCULEPARGNE
        // CALCULE MONTANT DE L'epargne
        // rajouter l'epargne au solde actuelle
        //retourne le montant de l'epargne
    }

    public function getFrais(): float
    {
        // TODO: Implement getFrais() method.
    }
}