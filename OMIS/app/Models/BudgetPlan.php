<?php
namespace App\Models;

class BudgetPlan
{
    public int $id;
    public array $categories;
    public array $limits;
    public string $start_date;
    public string $end_date;

    public function __construct(int $id, array $categories, array $limits, string $start_date, string $end_date)
    {
        $this->id = $id;
        $this->categories = $categories;
        $this->limits = $limits;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }
}
