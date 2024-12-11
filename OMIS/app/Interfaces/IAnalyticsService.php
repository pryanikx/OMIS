<?php
namespace App\Interfaces;

namespace App\Services;
use App\Models\BalanceReport;
use App\Models\MonthlyReport;

interface IAnalyticsService
{
    public function get_income_by_category(int $user_id, string $start_date, string $end_date): array;

    public function get_expenses_by_category(int $user_id, string $start_date, string $end_date): array;

    public function get_monthly_income_expense(int $user_id): array;

    public function get_balance_trend(int $user_id): array;
}
