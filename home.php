<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="icon" href="Assets\icons\icon.png" type="image/x-icon"/>
    <link rel="manifest" href="/manifest.json">

    <title>Tapop-A New Era Of Networking</title>

</head>

<body>
    <header>
        <nav id="navbar">
            <div>
                <p>
                    <img src="images/logo.svg" height="30px" width="30px">
                    Tapop<span>.</span>
                </p>
            </div>
            <ul id="nav-bt" class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Features</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="./signin.php" class="nav-link">Login</a>
                </li>
                <li class="nav-item ">
                    <a href="./signup.php" class="nav-link nav-ota">Signin</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <main>
        <section id="sec-home">
            <div class="flex-set" id="headings">
                <div>
                    <h1 id="heading1">The Smart<br>
                        Business Card</h1>
                    <h2 id="heading2">A New Era Of Networking.<br>
                        For People Who Want To<br> Make
                        A Great First Impression. </h2>
                    <button id="ota">Coming Soon</button>
                </div>
            </div>
            <div class="flex-set" id="card-container-main">
                <img src="images/card.png" width="400px" height="auto">
                <!-- <div class="flex-set" id="card-container">  
                    <div id="card-front" class="card flex-set">
                        <div id="card-front-content">
                            <h1>Sahil Khandpur</h1>
                            <h2>Tapop</h2>
                            <h3>Founder</h3>
                        </div>
                    </div>
                    <div id="card-back" class="card flex-set">
                        <img src="images/qrcode.png" width="200px">
                    </div>
                </div> -->
            </div>
        </section>
        <section id="sec-about">
            <h1 class="prptext sec-head-align">About</h1>
            <Div class="flex-set2">
                <div class="flex-set3 sec-about-p1">
                    <h1>What Is <span class="prptext">Tapop</span> ?</h1>
                    <ul>
                        <Li>Tapop is a digital visiting card with NFC
                            technology which instantly shares your contact,
                            social links & location details, ready to be saved
                            in a phone's address book on click of a button.</Li>
                        <Li>Tapop allows you to change your contact details
                            anytime & anywhere without reprinting your card.
                            Just have one Tapop & you would never run out of
                            business cards at critical moments.
                        </Li>
                        <Li>Equipped with NFC this smart business card will make
                            an impact and a great impression. Share your contact
                            details with a tap and give back to nature.
                        </Li>
                        <Li>Based on Web Based Application saving storage
                            space on your device.</Li>
                    </ul>
                </div>
                <hr>
                <div class="flex-set3 sec-about-p1">
                    <h1>How Does It <span class="prptext">Work</span> ?</h1>
                    <ul>
                        <Li>Buy Tapop. Login To build your profile in
                            ~3 mins.
                        </Li>
                        <Li>The person you are a taps/scans your tapop
                            card or unique QR code & sees your contact details
                            on his/her smartphone.
                        </Li>
                        <Li>The person you are meeting on-the-spot saves your
                            contact details in his/her phone's address book
                        </Li>
                        <Li>Based on Web Based Application saving storage
                            space on your device.</Li>
                    </ul>
                </div>
            </Div>
        </section>

        <section id="sec-features">
            <h1 class="prptext sec-head-align">Features</h1>
            <!-- <Div class=> -->
                <div class="grid-container">
                    <!-- row1 -->
                    <div class="para-align order2">
                        <h1>One Tap Is All You Need</h1>
                        <p>Hold your card near a phone with NFC or Scan QR
                        Code, and your contact details pop up on screen.</p>
                    </div>
                    <div  class="img-align order1" >    
                        <img src="images/1.png">
                    </div>
                    <!-- row2 -->
                    <div  class="img-align order3">
                        <img src="images/2.png">
                    </div>
                    <div class="order4">
                        <h1>One Tap Is All You Need</h1>
                        <p>Hold your card near a phone with NFC or Scan QR
                        Code, and your contact details pop up on screen.</p>
                    </div>
                    <!-- row3 -->
                    <div class="para-align order6">
                        <h1>One Tap Is All You Need</h1>
                        <p>Hold your card near a phone with NFC or Scan QR
                        Code, and your contact details pop up on screen.</p>
                    </div>
                    <div  class="img-align order5">
                        <img src="images/3.png">
                    </div>
                    <!-- row4 -->
                    <div  class="img-align order7">
                        <img src="images/4.png">
                    </div>
                    <div class="order8">
                        <h1>One Tap Is All You Need</h1>
                        <p>Hold your card near a phone with NFC or Scan QR
                        Code, and your contact details pop up on screen.</p>
                    </div>












                </div>
            <!-- </Div> -->
        </section>
    </main>
    <script src="functions.js"></script>

</body>

</html>