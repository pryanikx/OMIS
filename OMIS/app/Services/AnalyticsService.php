<?php

namespace App\Services;

use App\Interfaces\IAnalyticsService;
use App\Repositories\IAnalyticsRepository;

class AnalyticsService implements IAnalyticsService
{
    private ITransactionRepository $transaction_repository;

    public function __construct(ITransactionRepository $transaction_repository)
    {
        $this->transaction_repository = $transaction_repository;
    }

    public function get_income_by_category(int $user_id, string $start_date, string $end_date): array
    {
        // TODO: Реализация метода
    }

    public function get_expenses_by_category(int $user_id, string $start_date, string $end_date): array
    {
        // TODO: Реализация метода
    }

    public function get_monthly_income_expense(int $user_id): array
    {
        // TODO: Реализация метода
    }

    public function get_balance_trend(int $user_id): array
    {
        // TODO: Реализация метода
    }
}
