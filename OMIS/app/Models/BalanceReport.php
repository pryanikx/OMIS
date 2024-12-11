<?php

namespace App\Models;

class BalanceReport
{
    public string $date;
    public float $balance;

    public function __construct(string $date, float $balance)
    {
        $this->date = $date;
        $this->balance = $balance;
    }
}