<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <header>
                Login
            </header>
            <form action=" " method="" post>

                <div class="field input">
                    <label for="Username">
                        Username
                    </label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="password">
                        Password
                    </label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="login" required>
                </div>
                <div class="links">
                    Don't have an account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>