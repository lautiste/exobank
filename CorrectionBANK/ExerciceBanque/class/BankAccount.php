<?php

abstract class BankAccount{

    private string $accountNumber ;
    private float $balance; 
    private User $user;
    public static int $cost = 25;

    /**
     * @param string $accountNumber
     * @param float $balance
     * @param User $user
     */
    public function __construct(string $accountNumber, float $balance, User $user)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
        $this->user = $user;
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function withDraw(float $ammount){
        if($this->balance - $ammount >=0 ){
             $this->balance -= $ammount;
        }else{
            echo "Opération impossible";
        }
    }
    public  function depot( float $ammount){
        $this->balance += $ammount;
    }

    public function transfer(BankAccount $destinataire,float $ammount){
        $this->withDraw($ammount);
        $destinataire->depot($ammount);
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }

    abstract public function getFrais():float;

    


}