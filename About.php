<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/w3.css" rel="stylesheet" />
    <link href="assets/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" />
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .header-text{ font-family: Brush Script MT, cursive;}
        .cl{text-shadow: 2px 2px 5px white;}
        .co{text-shadow: 2px 2px 5px orange;}
        .cb{text-shadow: 2px 2px 5px black;}
        .cp{text-shadow: 2px 2px 5px green;}
    </style>
</head>
<body class="" style="background-image: url(background-imager/Elegant_Background-6.jpg);">
   
   <?php include_once("NavBar.php") ?>
  
   <hr class="" />
   <div class="container ">
    <div class="w3-row-padding w3-light-grey w3-round-large">
        <div class="w3-quarter">
           <div class="w3-card-2 w3-white w3-round-medium">
           <header class="w3-padding w3-purple w3-round-medium">Location: </header>
           <p class="w3-padding"> <span class="glyphicon glyphicon-map-marker"></span> Address :</p>
           <p class="w3-padding-left"> Durban ,South Africa.</p>
           <hr />
           <p class="w3-padding">
              <a class="w3-btn-floating w3-teal" href="https://www.facebook.com/sihle.l.dlamini">
              <span class="fa fa-facebook w3-xlarge w3-text-white"></span>
              </a> <a href="https://twitter.com/LuthandoDlamini " class="w3-btn-floating w3-teal">
              <span class="fa fa-twitter  w3-text-white"></span>
              </a> <a class="w3-btn-floating w3-teal" href="https://plus.google.com/u/0/app/basic/103739394219354837528?tab=XX">
              <span class="fa fa-google-plus  w3-text-white"></span></a> 
              <a class="w3-btn-floating w3-teal" href="http://www.linkedin.com/in/luthando-dlamini-27392b98?trk=nav_responsive_tab_profile">
              <span class="fa fa-linkedin w3-xlarge w3-text-white"></span></a> 
           </p> <hr /><br />
           </div>
        </div>
        <div class="w3-half">
           <div class="w3-card-2 w3-white  w3-round-large">
           <header class="w3-padding w3-center w3-round-large w3-purple">Pick03</header>
           <p class="w3-padding">
            Pick03 Win is a user-friendly platform that is dedicated to bring fun
            to people while offering easy ways of making money by guessing
            numbers that match with Pick03 numbers.
            <hr />
           </p>
           <p class="w3-padding">
            Pick03 Win was Found with one goal in mind which is to let the user 
            make some money while having some fun of guessing different numbers that 
            the user think will win. The game is 
            easy to play and to understand. 
           </p>
           
           <hr />
           <p class="w3-padding">
           Pick03 also have a <a class="w3-text-blue" href="Forum.php?id=<?php echo mt_rand() ?>">forum
           </a> where users share their experience about
           the  game and the service they get from Pick03. 
           </p>
           <hr /><br />
           </div>
        </div>
        <div class="w3-quarter">
             <div class="w3-card-2 w3-white w3-round-medium">
             <header class="w3-padding w3-purple w3-center w3-round-large">Pick03 Offices:</header>
             <hr />
             <div class="w3-image w3-padding">
                <img src="background-imager/Office.jpg" class="responsive" />
             </div>
             <hr /><br />
             </div>
        </div>
    </div>
   </div>
   <hr />
   <?php include_once("ContactUs.php") ?>
</body>
</html>
