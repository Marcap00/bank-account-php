<?php
require_once __DIR__ . '/AccountNumber.php';
class Account
{
    private AccountNumber $accountNumber;
    private float $balance;
    private string $type;

    public function __construct(AccountNumber $accountNumber, float $balance, string $type)
    {
        $this->setAccountNumber($accountNumber);
        $this->setBalance($balance);
        $this->setType($type);
    }

    public function setAccountNumber(AccountNumber $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getAccountNumber(): AccountNumber
    {
        return $this->accountNumber;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getType(): string
    {
        return $this->type;
    }
}