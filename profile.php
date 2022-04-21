<?php
session_start();
$currentuser2=$_GET['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $currentuser2;?> | Tapop Profile </title>
    <?php require "Dependencies.php"; ?>
    <link rel="stylesheet" href="style/profile.css">
    <link rel="icon" href="Assets\icons\icon.png" type="image/x-icon"/>

</head>
<?php   
error_reporting(0);
$e1=$e2=$ws=$fb=$ig=$tg=$ph=$tt=$ld=$dp=false;
// session_start();
$status=$_SESSION['loggedin'];
$curretnUser=$_SESSION['username'];
$ws=false;
                include 'components/_dbconnect.php';
                $sql="SELECT * FROM users_social_links WHERE username ='$curretnUser' OR username='$currentuser2'";
                $result =mysqli_query($conn,$sql);
                if($result){
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_array($result)){
                            // print_r($row);
                            if(!empty($row["whatsapp"])){ $ws= true; }
                            if(!empty($row["facebook"])){ $fb= true; }
                            if(!empty($row["email"])){ $e1= true; }
                            if(!empty($row["email2"])){ $e2= true; }
                            if(!empty($row["instagram"])){ $ig= true; }
                            if(!empty($row["telegram"])){ $tg= true; }
                            if(!empty($row["phone"])){ $ph= true; }
                            if(!empty($row["twitter"])){ $tt= true; }
                            if(!empty($row["linkdin"])){ $ld= true; } 
                            if(!empty($row["dp"])){ $dp= true; } ?>

<body>
    <main class="flex">
        <div class="flex" id="main_div">
            <section id="sec1" class="flex shadow animate__animated animate__zoomIn">
                <?php if($status)
                     { echo '<div class="session_bt flex">
                            <a class="edit-bt ota flex" href="edit_profile.php?username='.$row['username'].'">
                            <span class="material-icons">edit</span></a>
                            <a class="edit-bt ota flex" href="logout.php"><span class="material-icons">logout</span></a>
                         </div>';}
                 else{  } ?>


                <div id="sec1div1" class="flex ">
                    <!-- photo -->
                    <div id="dp">
                        <?php if($dp) {
                            echo "<img src='dummy.png'> ";}          
                            else{
                            echo " <img src='".$row['dp']."'> ";
                        } ?>


                    </div>
                    <!-- name -->
                    <div>
                        <h1 class="animate__animated animate__bounceInDown"> <?php echo $row['first']." ".$row['last']; ?> </h1>
                    </div>
                    <!-- aboutme -->
                    <div>
                        <p id="aboutme"><?php echo $row['aboutme']; ?> </p>
                    </div>
                    <!-- ota -->
                    <div class="flex">
                        <?php if($ph) echo " <a class='ota flex' href="."tel:".$row['phone']."> <span class='material-icons'>call</span>Call</a>";?>
                        <?php if($e1) echo "<a class='ota flex' href= "."mailto:".$row['email']."><span class='material-icons'>mail</span> email </a>";?>
                        <br>
                    </div>
                </div>
            </section>
            <!-- ------------------------------------------------------------- -->
            <section id="sec2" class="flex shadow animate__animated animate__zoomIn">
                <h1>Contact me
                </h1>
                <!-- whatsapp -->
                <div class="gird">
                    <?php if($ws) echo "<div class='girditem'><a href= "."https://api.whatsapp.com/send/?phone=".$row['whatsapp']."><img id='ws' class='icon'src='   Assets\icons\Whatsapp-1.png'></a> </div>";?>
                    <!-- secondary-mail -->
                    <?php if($e2) echo "<div class='girditem'><a href= "."mailto:".$row['email2']."><img id='e2' class='icon'src='Assets\icons\mail.png'></a></div>";?>
                    <!-- twitter -->
                    <?php if($tt) echo "<div class='girditem'><a href= "."https://twitter.com/".$row['twitter']."><img id='tt' class='icon'src='Assets\icons\Twitter-1.png'></a></div>";?>
                    <!-- instagram -->
                    <?php if($ig) echo "<div class='girditem'><a href="."https://www.instagram.com/".$row['instagram']."><img id='ig' class='icon'src='Assets\icons\Instagram-1.png'></a></div>";?>
                    <!-- telegram -->
                    <?php if($tg) echo "<div class='girditem'><a href="."https://t.me/".$row['telegram']."><img id='tg' class='icon'src='Assets\icons\Telegram-1.png'></a></div>";?>
                    <!-- facebook -->
                    <?php if($fb) echo "<div class='girditem'><a href= ".$row['facebook']."><img id='fb' class='icon'src='Assets\icons\Facebook-1.png'></a></div>";?>
                    <!-- linkdin -->
                    <?php if($ld) echo "<div class='girditem'><a href= "."".$row['linkdin']."> <img  id='ld'class='icon'src='Assets\icons\LinkedIn-1.png'></a></div>";?>
                </div>
            </section>
        </div>
    </main>
    <?php  }}}?>
</body>

</html>