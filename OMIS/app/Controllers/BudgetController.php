<?php

namespace App\Controllers;

use App\Models\BudgetPlan;
use App\Services\IBudgetService;

class BudgetController implements IBudgetController
{
    private IBudgetService $budget_service;

    public function __construct(IBudgetService $budget_service)
    {
        $this->budget_service = $budget_service;
    }

    public function create_budget_plan(/*BudgetPlan $plan*/): bool
    {
        // Пустой метод
        return false;
    }

    public function get_budget_plan(int $user_id)/*: ?BudgetPlan*/
    {
        // Пустой метод
        //return null;
    }

    public function update_budget_plan(/*BudgetPlan $plan*/): bool
    {
        // Пустой метод
        return false;
    }
}
