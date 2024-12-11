<?php

namespace App\Models;

class MonthlyReport
{
    public string $month;
    public float $income;
    public float $expenses;

    public function __construct(string $month, float $income, float $expenses)
    {
        $this->month = $month;
        $this->income = $income;
        $this->expenses = $expenses;
    }
}