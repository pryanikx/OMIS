<?php
namespace App\Services;

use App\Interfaces\IBudgetService;
use App\Models\BudgetPlan;

class BudgetService implements IBudgetService
{
    private IBudgetRepository $budget_repository;

    public function __construct(IBudgetRepository $budget_repository)
    {
        $this->budget_repository = $budget_repository;
    }

    public function create_budget_plan(BudgetPlan $plan): bool
    {
        // TODO: Реализация метода
    }

    public function get_budget_plan(int $user_id): BudgetPlan
    {
        // TODO: Реализация метода
    }
}
