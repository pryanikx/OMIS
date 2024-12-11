<?php
namespace App\Repositories;

use App\Interfaces\ITransactionRepository;
use App\Models\Transaction;

class TransactionRepository implements ITransactionRepository
{

    public function __construct()
    {

    }

    public function get_transactions_by_period(int $user_id, string $start_date, string $end_date): array
    {
        // TODO: Реализация метода
    }

    public function get_income_transactions(int $user_id, string $start_date, string $end_date): array
    {
        // TODO: Реализация метода
    }

    public function get_expense_transactions(int $user_id, string $start_date, string $end_date): array
    {
        // TODO: Реализация метода
    }

    public function get_recurring_transactions(int $user_id): array
    {
        // TODO: Реализация метода
    }

    public function create_transaction(Transaction $transaction): bool
    {
        // TODO: Реализация метода
    }

    public function get_transactions(int $user_id): array
    {
        // TODO: Реализация метода
    }
}

    