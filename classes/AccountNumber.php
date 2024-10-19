<?php
class AccountNumber
{
    private string $number;
    public function __construct(string $number)
    {
        $this->setNumber($number);
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    public function getNumber(): string
    {
        return $this->number;
    }
}