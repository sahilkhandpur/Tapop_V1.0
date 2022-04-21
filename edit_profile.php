<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true ){
    header("location:index.php");
    exit;
}
?>
<?php
$curretnUser= $_SESSION['username'];
$showAlert=FALSE;
if ($_SERVER["REQUEST_METHOD"]=="POST")   {
include 'components/_dbconnect.php';
$phone=$_POST["phone"];
$first=$_POST["first"];
$last=$_POST["last"];
$email2=$_POST["email2"];
$whatsapp=$_POST["whatsapp"];
$facebook=$_POST["facebook"];
$linkdin=$_POST["linkdin"];
$instagram=$_POST["instagram"];
$twitter=$_POST["twitter"];
$telegram=$_POST["telegram"];
$aboutme=$_POST["aboutme"];
$dp=$_POST["dp"];
$sql =" UPDATE `users_social_links` SET `phone` = '$phone', `email2` = '$email2', `whatsapp` ='$whatsapp', `facebook` = '$facebook', `linkdin` = '$linkdin', `instagram` = '$instagram', `twitter` ='$twitter', `telegram` = '$telegram', `first` = '$first', `last` = '$last', `aboutme` = '$aboutme', `dp` = '$dp' WHERE`users_social_links`.`username`= '$curretnUser' ";

    $result4 = mysqli_query($conn,$sql);
            if($result4){
              $showAlert=true;
              header("location:profile.php?username={$curretnUser}");
            }
            else{
                echo 
                "Something Went Wron Updation Unsuccesful";
            }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile <?php echo $_SESSION['username'] ?></title>
    <link rel="stylesheet" href="style/profile.css">
    <link rel="stylesheet" href="style/editprofile.css">
    <link rel="stylesheet" href="style/signin_style.css">


    <?php require "Dependencies.php"; ?>
</head>

<body>
    <?php   
                include 'components/_dbconnect.php';
                $sql="SELECT * FROM users_social_links WHERE username ='$curretnUser'";
                $result =mysqli_query($conn,$sql);
                if($result){
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_array($result)){
                            // print_r($row);?>



    <main class="flex">
        <div class="flex" id="main_div">
            <section id="sec1" class="flex shadow">
                <form action="/tapop/edit_profile.php" method="POST" class="flex">

                    <h1>Welcome Back! <?php echo $_SESSION['username'] ?></h1>

                    <div id="input_fields">
                        <div class="grid row">
                            <label>First name</label>
                            <input type="text" name="first" value="<?php echo $row['first']; ?>" placeholder="First name">
                        </div>

                        <div class="grid row">
                            <label>Last Name</label>
                            <input type="text" name="last" value="<?php echo $row['last']; ?>" placeholder="Second name"> <br>
                        </div>
                        <div class="grid row">
                            <label>Phone Number</label>
                            <input type="tel" pattern="[0-9]{10}" name="phone" value="<?php echo $row['phone']; ?>"
                                placeholder="">
                        </div>
                        <div class="grid row">
                            <label>Primary Email</label>
                            <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="example@work.com">
                        </div>
                        <div class="grid row">
                            <label>Secondary Email</label>
                            <input type="email" name="email2" value="<?php echo $row['email2']; ?>" placeholder="example@personal.com">
                        </div>
                        <div class="grid row">
                            <label>Whatsapp</label>
                            <input type="tel" name="whatsapp" value="<?php echo $row['whatsapp']; ?>" placeholder="+91 1234567890">
                        </div>
                        <div class="grid row">
                            <label>Facebook</label>
                            <input type="url" name="facebook" value="<?php echo $row['facebook']; ?>" placeholder="username">
                        </div>
                        <div class="grid row">
                            <label>LinkDin</label>
                            <input type="url" name="linkdin" value="<?php echo $row['linkdin']; ?>" placeholder="URL">
                        </div>
                        <div class="grid row">
                            <label>Instagram</label>
                            <input type="text" name="instagram" value="<?php echo $row['instagram']; ?>" placeholder="username">
                        </div>
                        <div class="grid row">
                            <label>Twitter</label>
                            <input type="text" name="twitter" value="<?php echo $row['twitter']; ?>" placeholder="username">
                        </div>
                        <div class="grid row">
                            <label>Telegram</label>
                            <input type="text" name="telegram" value="<?php echo $row['telegram']; ?>" placeholder="username">
                        </div>
                        <div class="grid row">
                            <label>About me</label>
                            <input type="textarea" name="aboutme" value="<?php echo $row['aboutme']; ?>" placeholder="">
                        </div>
                        <div class="grid row">
                            <label>Profile Picture</label>
                            <input type="file" name="dp" value="<?php echo $row['dp']; ?>" placeholder="">
                        </div>
                    </div>
                    <button class="ota" type="submit" id="Update_bt">UPDATE</button>

                </form>
            </section>
        </div>
    </main>

    <?php
                        }

                    }
                }

         ?>



    <?php
if($showAlert)
echo
 '<div class="alert">Your Profile has been updated </div>';
?>
    <script>
    import {
        MDCTextField
    } from '@material/textfield';
    const textField = new MDCTextField(document.querySelector('.mdc-text-field'));
    </script>
</body>

</html>