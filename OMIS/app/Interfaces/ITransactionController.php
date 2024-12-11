<?php

namespace App\Controllers;

interface ITransactionController
{
    public function create_transaction(/*Transaction $transaction*/): bool;

    public function get_transactions(int $user_id): array;

    public function create_recurring_transaction(/*Transaction $transaction*/): bool;

    public function cancel_transaction(int $transaction_id): bool;
}
