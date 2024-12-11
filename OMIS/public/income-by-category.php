<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Income by Category</title>
    <link rel="stylesheet" href="css/income-by-category.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <div class="analytics-category-container">
            <h1>Income by category</h1>

            <!-- Dropdown для выбора месяца -->
            <div class="dropdown">
                <label for="months">Choose months:</label>
                <select id="months" name="months">
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                </select>
            </div>

            <!-- Категории с доходами -->
            <div class="category-list">
                <div class="category-item">
                    <div class="icon">💰</div>
                    <p>7500$</p>
                </div>
                <div class="category-item">
                    <div class="icon">🔑</div>
                    <p>500$</p>
                </div>
                <div class="category-item">
                    <div class="icon">🎁</div>
                    <p>100$</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
