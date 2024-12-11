<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <link rel="stylesheet" href="css/transaction.css">
    <script src="js/transaction.js"></script>
</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Transactions Section -->
    <div class="transaction-container">
        <div class="transactions">
            <h2>April</h2>
            <div class="transaction">
                <div class="icon">💵</div>
                <div class="details">
                    <h3>Salary</h3>
                    <p>18:27 - April 30</p>
                </div>
                <div class="type">Monthly</div>
                <div class="amount">+ $4,000.00</div>
            </div>
            <div class="transaction">
                <div class="icon">🛒</div>
                <div class="details">
                    <h3>Groceries</h3>
                    <p>17:00 - April 24</p>
                </div>
                <div class="type">Pantry</div>
                <div class="amount negative">- $100.00</div>
            </div>
            <!-- Add more transactions as needed -->
        </div>
        <div class="transactions">
            <h2>March</h2>
            <div class="transaction">
                <div class="icon">🍔</div>
                <div class="details">
                    <h3>Food</h3>
                    <p>19:30 - March 31</p>
                </div>
                <div class="type">Dinner</div>
                <div class="amount negative">- $70.40</div>
            </div>
        </div>
    </div>

    <!-- Buttons -->
    <div class="action-buttons">
        <button id="add-income">+</button>
        <button id="add-expense">-</button>
    </div>

    <script src="js/transaction.js"></script>
</body>
</html>
