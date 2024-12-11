<?php
namespace App\Interfaces;

use App\Models\MonthlyReport;
use App\Models\BalanceReport;

interface IAnalyticsRepository
{
    public function generate_report(int $user_id): BalanceReport;
}

