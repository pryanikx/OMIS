<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Plan</title>
    <link rel="stylesheet" href="css/budget-plan.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="budget-plan-container">
        <div class="budget-item">
            <a href="planned-expense.php" class="budget-plan-link">
                <h3>Planned Expense</h3>
                <p class="value">$1,500.00</p>
                <div class="bar planned"></div>
            </a>
        </div>
        <div class="budget-item">
            <h3>Total Expense</h3>
            <p class="value total">$787.40</p>
            <div class="bar total"></div>
        </div>
        <div class="budget-item">
            <a href="planned-income.php" class="budget-plan-link">
                <h3>Planned Income</h3>
                <p class="value">$1,500.00</p>
                <div class="bar planned"></div>
            </a>
        </div>
        <div class="budget-item">
            <h3>Total Income</h3>
            <p class="value total">$787.40</p>
            <div class="bar total"></div>
        </div>
    </div>
</body>
</html>
