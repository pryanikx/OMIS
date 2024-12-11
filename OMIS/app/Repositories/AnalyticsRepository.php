<?php

namespace App\Repositories;

use App\Interfaces\IAnalyticsRepository;
use App\Models\BalanceReport;
use App\Models\MonthlyReport;

class AnalyticsRepository implements IAnalyticsRepository
{

    public function __construct()
    {

    }

    public function generate_report(int $user_id): BalanceReport
    {
        // TODO: Реализация метода
    }
}
