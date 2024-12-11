<?php
namespace App\Interfaces;

use App\Models\Transaction;              

interface ITransactionRepository
{
    public function get_transactions_by_period(int $user_id, string $start_date, string $end_date): array;

    public function get_income_transactions(int $user_id, string $start_date, string $end_date): array;

    public function get_expense_transactions(int $user_id, string $start_date, string $end_date): array;

    public function get_recurring_transactions(int $user_id): array;

    public function create_transaction(Transaction $transaction): bool;

    public function get_transactions(int $user_id): array;
}

