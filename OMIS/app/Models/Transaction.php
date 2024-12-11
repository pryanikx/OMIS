<?php
namespace App\Models;

use App\Models\Category;
abstract class Transaction
{
    public int $id;
    public float $amount;
    public string $date;
    public Category $category;
    public Account $account;

    abstract public function apply(): void;
}
