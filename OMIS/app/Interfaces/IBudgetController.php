<?php

namespace App\Controllers;

interface IBudgetController
{
    public function create_budget_plan(/*BudgetPlan $plan*/): bool;

    public function get_budget_plan(int $user_id)/*: ?BudgetPlan*/;

    public function update_budget_plan(/*BudgetPlan $plan*/): bool;
}
