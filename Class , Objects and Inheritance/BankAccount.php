<?php
class Bank
{
    private $acno;
    private $balance;

    public function __construct()
    {
        echo "<p>Constructor is called</p>";
        $this->acno = 0;
        $this->balance = 0;
    }

    public function getbalance()
    {
        return $this->balance;
    }

    public function newaccount($acno, $balance)
    {
        $this->acno = $acno;
        $this->balance = $balance;
    }

    public function deposite($deposite)
    {
        echo "<h3>After Deposite: </h3>";
        $this->balance = $this->balance + $deposite;
    }

    public function withdraw($withdraw)
    {
        echo "<h3>After Wthidraw: </h3>";
        $this->balance = $this->balance - $withdraw;
    }

    public function viewbalance()
    {

        echo "<p>Account No: " . $this->acno . "</p>";
        echo "<p>Balance: " . $this->balance . "</p>";
    }

    public function __destruct()
    {
        echo "<p>Destructor is called</p>";
    }
}

$customer1 = new Bank();
$customer1->viewbalance();

$customer1->newaccount(1234, 2000);
$customer1->viewbalance();

$customer1->deposite(500);
$customer1->viewbalance();

$customer1->withdraw(400);
$customer1->viewbalance();
