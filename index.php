<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Tapop</title>
    <link rel="stylesheet" href="style/mainstyle.css">
    <link rel="stylesheet" href="style/common.css">
    <link rel="icon" href="Assets\icons\icon.png" type="image/x-icon"/>

    <?php require "Dependencies.php"; ?>
</head>
<body>
    <main>
        <div id="main_container" class="animate__animated  animate__backInLeft">
            <div id="first_div">
                <div id="heading">
                    <h1>Welcome To Tapop </h1>
                    <h2 id="desktopHead">Desktop App</h2>
                    <h2 id="mobileHead">Mobile App</h2>
                    <p id="text"> Sign In If You Already Have An Account<br> Or Signup </P>
                    <p> Get Started -> </P>

                </div>
            </div>
            <div id="second_div">
                <a class="bt_design" href="signin.php">
                    <span>Sign in</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
                        <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                        <path fill="black"
                            d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z">
                        </path>
                    </svg>
                </a>
                <a class="bt_design" href="signup.php">
                    <span>Sign up</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
                        <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                        <path fill="black"
                            d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z">
                        </path>
                    </svg>
                </a>
                <a class="bt_design" href="./home.php">
                    <span>Home  </span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34" width="34">
                        <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                        <path fill="black"
                            d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z">
                        </path>
                    </svg>
                </a>

            </div>
        </div>
    </main>
</body>
</html>