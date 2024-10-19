<?php
class Customer
{
    private string $forename;
    private string $surname;
    private string $email;
    private string $password;
    private array $accounts;

    public function __construct(string $forename, string $surname, string $email, string $password, array $accounts)
    {
        $this->setForename($forename);
        $this->setSurname($surname);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setAccounts($accounts);
    }

    public function setForename(string $forename): void
    {
        $this->forename = $forename;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setAccounts(array $accounts): void
    {
        $this->accounts = $accounts;
    }

    public function getForename(): string
    {
        return $this->forename;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getFullName(): string
    {
        return "{$this->forename} {$this->surname}";
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getAccounts(): array
    {
        return $this->accounts;
    }
}