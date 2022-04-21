<?php  
$showAlert= false;
$showError= false;
$showPassError=false;
$exists=false;
$username=$email=$password=$cpassword="";
$nameErr=$emailErr=$passwordErr=$cpasswordErr="";
// $requireErr=false;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
include 'components/_dbconnect.php';
if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $username=$_POST["username"];
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email=$_POST["email"];
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password=$_POST["password"];
  }

  if (empty($_POST["cpassword"])) {
    $cpasswordErr = "Please Confirm your Password";
  } else {
    $cpassword=$_POST["cpassword"];
  }
  if (($password == $cpassword))
      {
        $showPassError=false;
      }
      else{
        $showPassError=true;
      }

$existSql= "SELECT * FROM `users` WHERE username = '$username'";
$result =mysqli_query($conn,$existSql);
$numExistRows=mysqli_num_rows($result);
if ($numExistRows >0){
     $exists=true;
}
else{
  
  $exists=false;
  if (($password == $cpassword) & $exists==false & $username!="" & $email!="" & $password!="" & $cpassword!=""){
    $sql ="INSERT INTO `users` (`username`, `email`, `password`, `date`) VALUES ('$username', '$email', '$password', current_timestamp())";
    $sql2="INSERT INTO `users_social_links` (`username`, `email`) VALUES ('$username', '$email')";
              mysqli_query($conn,$sql2);
         $result =mysqli_query($conn,$sql);
            if($result){
              session_start();
                $_SESSION['username']=$username;
               header("location: ./profile.php?username={$username}");

            }
    }
    else{
        $showError = true ;
    
    }
  
}

}?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGIN IN | TAPOP </title>
    <link rel="stylesheet" href="./style/signin_style.css">
    <link rel="stylesheet" href="./style/signup.css">
    <link rel="stylesheet" href="style/common.css">
    <link rel="icon" href="Assets\icons\icon.png" type="image/x-icon"/>

    <?php require "Dependencies.php";?>
</head>

<body>
    <main class="flex">
        <div id="MAIN_container" class="flex animate__animated animate__backInLeft">
            <section id="signinSection" class="flex ">
                <h1>Sign up </h1>
                <div id="signinBody">
                    <form action="/tapop/signup.php" method="POST" class="flex">

                        <div class="field_setup flex">
                            <span class="material-icons">account_circle</span>
                            <!-- <label for="username">Username</label> -->
                            <input type="text" id="username" name="username" placeholder="Username">
                        </div>

                        <?php if($nameErr) echo '<div class="error">'.$nameErr.'</div>'; ?>


                        <div class="field_setup flex">
                            <span class="material-icons">mail</span>
                            <!-- <label for="email">Email</label> -->
                            <input type="email" id="email" name="email" placeholder="Email">
                        </div>
                        <?php if($emailErr) echo '<div class="error">'.$emailErr.'</div>'; ?>


                        <div class="field_setup flex">
                            <span class="material-icons">password</span>
                            <!-- <label for="password">Password</label> -->
                            <input type="password" class="pass" id="password" name="password" placeholder="Password">
                        </div>
                        <?php if($passwordErr) echo '<div class="error">'.$passwordErr.'</div>'; ?>

                        <div class="field_setup flex">
                            <span class="material-icons">password</span>
                            <!-- <label for="cpassword">Confirm</label> -->
                            <input type="password" class="pass" id="cpassword" name="cpassword"
                                placeholder="Confirm Password">
                        </div>
                        <?php if($cpasswordErr) echo '<div class="error">'.$cpasswordErr.'</div>'; ?>



                        <button class="bt_design" type="submit" id="signup_bt">Signup
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34"
                                width="34">
                                <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                                <path fill="black"
                                    d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z">
                                </path>
                            </svg>
                        </button>
                        <p>Already have an account ? Signin <a href="signin.php">here</a> </p>

                    </form>
                </div>
            </section>

            <Section id="Err_contain" class="animate__animated animate__slideInDown">
                <?php if($showPassError)echo'<div class="error">Passwords Do Not Match</div>';?>
                <?php if($showError)echo '<div class="error animate__animated animate__flash ">Please Fill all the required Fields</div>';?>
                <?php if($exists)echo'<div class="error">User Already Exists</div>';?>
            </Section>
        </div>
    </main>
</body>

</html>