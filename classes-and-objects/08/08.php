<?php
class SavingAccount
{
    private float $annualInterestRate;
    private float $balance;

    public function __construct(float $startingBalance, float $annualInterestRate)
    {
        $this->balance=$startingBalance;
        $this->annualInterestRate=$annualInterestRate;
    }

    public function getBalance():float
    {
        return $this->balance;
    }

    public function withdrawal(float $amount)
    {
        $this->balance-=$amount;
    }

    public function deposit(float $amount)
    {
        $this->balance+=$amount;
    }

    public function addMonthlyInterest()
    {
        $this->balance += $this->balance*($this->annualInterestRate/12);
    }
}