<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="css/account.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="account-container">
        <div class="accounts">
            <div class="account">
                <div class="icon">💳</div>
                <div class="details">
                <a href="edit-account.php" class="account-link">
                    <h3>Salary Card</h3>
                </div>
                <div class="amount">$16,000.00</div>
            </div>
            <div class="account">
                <div class="icon">💵</div>
                <div class="details">
                <a href="edit-account.php" class="account-link">
                    <h3>Cash</h3>
                </div>
                <div class="amount">$45.00</div>
            </div>
            <div class="account">
                <div class="icon">💳</div>
                <div class="details">
                <a href="edit-account.php" class="account-link">
                    <h3>Second Card</h3>
                </div>
                <div class="amount">$1,000.00</div>
            </div>
        </div>

        <div class="add-account">
            <a href="add-account.php">
                <div class="icon">+</div>
            </a>
        </div>
    </div>
</body>
</html>
