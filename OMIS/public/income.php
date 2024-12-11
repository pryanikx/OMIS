<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Income</title>
    <link rel="stylesheet" href="css/income-spending.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="form-container">
        <a href="transaction.php" class="back-button">←</a>
        <h1>Income</h1>
        <form action="transaction.php" method="POST">
            <div class="form-group">
                <label for="amount">Сумма пополнения</label>
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
                <label for="account">Выбрать счет пополнения</label>
                <div class="input-with-icon">
                    <input type="text" id="account" name="account" required>
                    <button type="button" class="icon-button">+</button>
                </div>
            </div>
            <div class="form-group">
                <label for="date">Дата</label>
                <input type="date" id="date" name="date" required>
            </div>
            <button type="submit" class="btn">Add</button>
        </form>
    </div>
</body>
</html>
