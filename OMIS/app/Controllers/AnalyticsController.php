<?php

namespace App\Controllers;

use App\Services\IAnalyticsService;
use App\Models\MonthlyReport;
use App\Models\BalanceReport;

class AnalyticsController implements IAnalyticsController
{
    private IAnalyticsService $analytics_service;

    public function __construct(IAnalyticsService $analytics_service)
    {
        $this->analytics_service = $analytics_service;
    }

    public function get_income_by_category(int $user_id, string $start_date, string $end_date): array
    {
        // Пустой метод
        return [];
    }

    public function get_expenses_by_category(int $user_id, string $start_date, string $end_date): array
    {
        // Пустой метод
        return [];
    }

    public function get_monthly_income_expense(int $user_id, string $start_date, string $end_date): array
    {
        // Пустой метод
        return [];
    }

    public function get_balance_trend(int $user_id): array
    {
        // Пустой метод
        return [];
    }

    public function get_savings_summary(int $user_id): array
    {
        // Пустой метод
        return [];
    }
}
