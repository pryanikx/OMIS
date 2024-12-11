<?php
namespace App\Models;

class Account
{
    public int $id;
    public string $name;
    public float $balance;
    public string $currency;
    public string $type;

    public function __construct(int $id, string $name, float $balance, string $currency, string $type)
    {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
        $this->currency = $currency;
        $this->type = $type;
    }
}
    