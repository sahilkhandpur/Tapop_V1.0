<?php 
$showError= false;
$usernameErr=false;
$passwordErr=false;
$login=false;
$username=$password="";
$nameErr=$passwordErr="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
include './components/_dbconnect.php';
if (empty($_POST["username"])) {
$usernameErr= "username is required!";
} else {
$username=$_POST["username"];
}
if (empty($_POST["username"])) {
$passwordErr= "Password is required!";
} else {
$password=$_POST["password"];
   }
$sql = "select * from users where username='$username' AND password='$password'";
$result =mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num == 1){
    $login=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$username;
    header("location: ./profile.php?username={$username}");
     }
else{
    $showError ="Invalid user!";

}
    }                                                          ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGIN IN | TAPOP </title>
    <link rel="stylesheet" href="./style/signin_style.css">
    <link rel="stylesheet" href="style/common.css">
    <link rel="icon" href="Assets\icons\icon.png" type="image/x-icon"/>

    <?php require "Dependencies.php";?>
</head>

<body>
    <main class="flex">
        <div id="MAIN_container" class="flex  animate__animated animate__backInLeft">
            <section id="signinSection" class="flex ">
                <h1>Sign in </h1>
                <div id="signinBody">
                    <form action="/tapop/signin.php" method="POST" class="flex formitem">
                        <div class="flex">
                            <span class="material-icons">account_circle</span>
                            <input class="formitem" type="text" id="username" name="username" placeholder="Username">
                        </div>
                        <br>
                        <div class="flex">
                            <span class="material-icons">lock</span>
                            <input class="formitem" type="password" class="pass" id="password" name="password"
                                placeholder="********">
                        </div>
                        <br>

                        <button class="formitem bt_design" type="submit" id="signin_bt">SignIn <svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34"
                                width="34">
                                <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                                <path fill="black"
                                    d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z">
                                </path>
                            </svg>
                        </button>
                        <p>Dont have an account yet ? Signup <a href="signup.php">here</a> </p>
                        </from>
                </div>
            </section>

            <Section id="Err_contain" class="animate__animated     animate__slideInDown">
                <?php if($showError) echo '<div id="er1" class="error">'.$showError.'</div>'; ?>
                <?php if($usernameErr) echo '<div class="error">'.$usernameErr.'</div>'; ?>
                <?php if($passwordErr) echo '<div class="error">'.$passwordErr.'</div>'; ?>
                <?php if($login) echo '<div class="alert"> you are logged in </div>'; ?>
            </Section>
        </div>
    </main>
</body>

</html>