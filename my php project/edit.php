<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="stylesfor_yutubdan.css" />
</head>

<body>
    <header class="header">
        <div class="left">
            <a href="home.php"><img class="logo_picture" src="icons/Screenshot 2024-05-23 220758.png"
                    alt="Eğitim Platformu"></a>
        </div>
        <div class="section2">
            <input type="checkbox" id="nav_check" hidden>
            <nav>
                <ul>
                    <li><a href="main_page.html">Home</a></li>
                    <li><a href="about_as.html">About</a></li>
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="index.html">Contact</a></li>

                </ul>
            </nav>
            <label for="nav_check" class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </label>
        </div>
        <div class="right-section">
            <div class="search-bar">
                <input type="text" placeholder="Search...">
            </div>
            <div class="login">
                <a href="#">Change profile</a>
                <a href="logout.php"><button class="login_button">Logout</button></a>
            </div>

        </div>


    </header>
    <div class="container">
        <div class="box form-box">

            <form action=" " method="" post>
                <div>Change Profile</div>
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

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
                <div class="links">
                    Already a member <a href="index.html">Sign in</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>