<?php
namespace App\Interfaces;

use App\Models\Transaction;

interface ITransactionService
{
    public function create_transaction(Transaction $transaction): bool;

    public function get_transactions(int $user_id): array;
}
