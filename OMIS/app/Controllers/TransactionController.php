<?php

namespace App\Controllers;

use App\Models\Transaction;
use App\Services\ITransactionService;
use App\Services\IBudgetService;

class TransactionController implements ITransactionController
{
    private ITransactionService $transaction_service;
    private IBudgetService $budget_service;

    public function __construct(ITransactionService $transaction_service, IBudgetService $budget_service)
    {
        $this->transaction_service = $transaction_service;
        $this->budget_service = $budget_service;
    }

    public function create_transaction(/*Transaction $transaction*/): bool
    {
        // Пустой метод
        return false;
    }

    public function get_transactions(int $user_id): array
    {
        // Пустой метод
        return [];
    }

    public function create_recurring_transaction(/*Transaction $transaction*/): bool
    {
        // Пустой метод
        return false;
    }

    public function cancel_transaction(int $transaction_id): bool
    {
        // Пустой метод
        return false;
    }
}
