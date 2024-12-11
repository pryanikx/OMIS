<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link rel="stylesheet" href="css/login_style.css">
</head>
<body>
    <div class="container">
        <!-- Login Form Section -->
        <div class="form-box form-left">
            <h2>Log in your account</h2>
            <form action="transaction.php" method="POST">
                <div class="form-group">
                    <label for="login-username">Username</label>
                    <input type="text" id="login-username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" name="password" required>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>

        <!-- Register Form Section -->
        <div class="form-box form-right">
            <h2>Create a free account</h2>
            <form action="transaction.php" method="POST">
                <div class="form-group">
                    <label for="register-username">Username</label>
                    <input type="text" id="register-username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="register-email">Email address</label>
                    <input type="email" id="register-email" name="email" required>
                </div>
                <div class="form-row">
                    <div class="form-group half-width">
                        <label for="register-first-name">First name</label>
                        <input type="text" id="register-first-name" name="first_name" required>
                    </div>
                    <div class="form-group half-width">
                        <label for="register-last-name">Last name</label>
                        <input type="text" id="register-last-name" name="last_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="register-password">Password</label>
                    <input type="password" id="register-password" name="password" required>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
