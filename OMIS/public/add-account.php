<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Account</title>
    <link rel="stylesheet" href="css/account.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="account-form-container">
        <h1>Add Account</h1>
        <form action="account.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" id="type" name="type" required>
            </div>
            <div class="form-group">
                <label for="currency">Currency</label>
                <input type="text" id="currency" name="currency" required>
            </div>
            <button type="submit" class="btn">Save</button>
        </form>
    </div>
</body>
</html>
