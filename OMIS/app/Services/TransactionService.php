<?php
namespace App\Services;

use App\Interfaces\ITransactionService;
use App\Interfaces\ITransactionRepository;
use App\Models\Transaction;

class TransactionService implements ITransactionService
{
    private ITransactionRepository $transaction_repository;
    private IBudgetService $budget_service;
    private IAccountService $account_service;

    public function __construct(
        ITransactionRepository $transaction_repository,
        IBudgetService $budget_service,
        IAccountService $account_service
    ) {
        $this->transaction_repository = $transaction_repository;
        $this->budget_service = $budget_service;
        $this->account_service = $account_service;
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

