<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <header>
                Sign Up
            </header>
            <form action=" " method="" post>

                <div class="field input">
                    <label for="Username">
                        Username
                    </label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">
                        Email
                    </label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">
                        Age
                    </label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">
                        Password
                    </label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="login" required>
                </div>
                <div class="links">
                    Already a member <a href="index.php">Sign in</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>