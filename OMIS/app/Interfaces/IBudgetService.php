<?php
namespace App\Interfaces;

use App\Models\BudgetPlan;

interface IBudgetService
{
    public function create_budget_plan(BudgetPlan $plan): bool;

    public function get_budget_plan(int $user_id): BudgetPlan;
}

