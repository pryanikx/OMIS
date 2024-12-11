<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planned Expense</title>
    <link rel="stylesheet" href="css/income-spending.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="form-container">
        <a href="budget-plan.php" class="back-button">←</a>
        <h1>Planned Expense</h1>
        <form action="budget-plan.php" method="POST">
            <div class="form-group">
                <label for="amount">Сумма расхода</label>
                <input type="number" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="category">Выбрать категорию</label>
                <div class="input-with-icon">
                    <input type="text" id="category" name="category" required>
                    <button type="button" class="icon-button">+</button>
                </div>
            </div>
            <div class="form-group">
                <label for="account">Выбрать счет списания</label>
                <div class="input-with-icon">
                    <input type="text" id="account" name="account" required>
                    <button type="button" class="icon-button">+</button>
                </div>
            </div>
            <button type="submit" class="btn">Add</button>
        </form>
    </div>
</body>
</html>
