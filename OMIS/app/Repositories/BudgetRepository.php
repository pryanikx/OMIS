<?php
namespace App\Repositories;

use App\Interfaces\IBudgetRepository;
use App\Models\BudgetPlan;

class BudgetRepository implements IBudgetRepository
{

    public function __construct()
    {
        
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
