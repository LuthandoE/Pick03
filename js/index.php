<?php
  
    $message = "";
    if(isset($_POST['submit'])){
        
        $to = "luthandodlamini94@gmail.com";
        $name = $_POST['name'];
       $from = $_POST['fromEmail'];
       $headers = 'From: $from'. "\r\n".
                    'Reply-To: $to'."\r\n".
                    'X-Mailer: PHP'.phpversion();
        $txt = $_POST['body'];
        
        mail($to,$name,$txt,$headers);
        $message = "Email has been sent  successfully";

    } else {
        echo "Sorry, error occured!";
    }
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Luthando Dlamini</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="keywords" content="Luthando Dlamini, programmer, software developer, web developer" />
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="w3/w3.css" rel="stylesheet" />
    <link href="font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" />
    
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(function (){
           
            $("#number").click(function(){
                $("#sno").toggle();
                $("#hn").toggle();
            });
            
            $("#email_cont").click(function(){
                $("#es").toggle();
                $("#eh").toggle();
            });
        });
    </script>
    
   <style>
  .header-text{ font-family: Brush Script MT, cursive;}
  .jmb { color: black; font-size: 50px; text-shadow: 2px 2px 5px dodgerblue; font-family: 'Bell MT'; }
  .textSlogan { font-size: 16px; font-style: italic; }
  .searchdiv { max-width: 400px; margin: auto; text-align: left; font-size: 16px; }
  .w3-dropnav { display: none; padding-bottom: 40px; }
  .w3-dropnav h3 { padding-top: 20px; }
  .w3-dropnav .w3-col { height: 260px;}
  .w3-theme { color: #fff !important; background-color: #000 !important;}

  .homeShortcut { text-align: left;}
  .dropMargin { margin-top: -3px;}
</style>
</head>
<body>
<?php include_once("index_mob.htm") ?>
<div class="container ">
<!--Panel Starts  -->
<div class="panel panel-default w3-card-12">
<div class="panel-heading navbar-fixed-top">
<!--Navigation Bar Begins  -->
<?php// include_once("Navbar.htm") ?>
https://github.com/LuthandoE/my-personal-website.git
<!--Navigation Bar Ends-->
<!--Nav Projects -->
<?php include_once("Projects.htm") ?>
<?php include_once("Col.htm") ?>
<!--Nav background -->
<?php include_once("lu.htm") ?>
<!--Nav bio -->
<?php include_once("about.htm") ?>
</div>

<div id="myPage" class="panel-body w3-card-16">
<!--Panel Body Content  -->
<div class="container-fluids">
<div class="w3-padding-64">&nbsp;</div>
<!-- Container  -->
<div class="container-fluid w3-jumbo w3-animate-zoom  w3-margin-top 12 w3-padding-bottom  w3-center">
    <!-- My header  -->
    <div class="container-fluid w3-hide-small"> <h1 class="jmb" id="homeText"><strong>
    <span class="fa fa-code w3-xxxlarge">
    </span> I AM A DEVELOPER <span class="fa fa-code w3-xxxlarge">
    </span> </strong></h1></div>
    <!-- My slogan  -->
    <div class="w3-card-12 w3-border-bottom w3-border-orange w3-padding 
          w3-hide-small w3-margin-bottom w3-medium">
    <p class="w3-text-blue textSlogan w3-animate-fading">"Good design adds value faster than it adds cost!"</p>
    </div>
</div>
<div class="row w3-padding-top w3-margin-top ">
<!-- Column - Services   -->
<div class="col-md-3">
<div class="w3-card-24" style="width:100%">
<header class="w3-container w3-blue w3-margin-bottom w3-center">
    <h3>Services&nbsp; <span class="glyphicon glyphicon-thumbs-up "></span></h3></header>

<div class="w3-center"> <img src="image/WT.jpg" class="img-circle " id="spin_img" /></div><hr />
<a class="fa fa-facebook-square w3-text-indigo w3-xlarge" href="https://www.facebook.com/sihle.l.dlamini"style="margin-left:40px"></a>  &nbsp; 
<a class="fa fa-twitter-square w3-xlarge w3-text-blue" href="https://twitter.com/LuthandoDlamini "></a> &nbsp;
<a class="fa fa-google-plus-square w3-xlarge w3-text-red" href="https://plus.google.com/u/0/app/basic/103739394219354837528?tab=XX"></a>  &nbsp;
<a class="fa fa-linkedin-square w3-text-blue-grey w3-xlarge" href="http://www.linkedin.com/in/luthando-dlamini-27392b98?trk=nav_responsive_tab_profile">
</a> &nbsp; <hr />

<div class="w3-container ">
<header class="w3-container w3-light-grey">
    <p class="w3-large">Web Design</p>
    <ul>
    <li>Photoshop</li>
    </ul>
    
    <p class="w3-large">Web Development</p>
    <ul>
    <li>HTML5</li>
    <li>CSS3</li>
    <li>W3.CSS</li>
    <li>JavaScript</li>
    <li>JQuery</li>
    <li>AJAX
    
    <span class="w3-badge w3-red ">New</span>
    </li>
    <li>JSON</li>
    <li>PHP 5</li>
    <li>C#</li></ul>
    
      <p class="w3-large">Mobile Development</p>
    <ul>
      <li>Java</li>
      <li>XML</li>
      <li>JSON</li>
      <li>JQuery Mobile</li>
    </ul>
        
    <p class="w3-large">Promotion</p>
    <ul>
     <li>SEO</li>
     <li>Email</li>
    </ul>
</header>


</div>
<div class="w3-card-2 w3-border-bottom w3-border-light-blue w3-padding-12"></div>
</div></div>
    <!--Column - intro -->
    <div class="col-md-9">
    <div class="w3-container ">
    <div class="w3-card-24 w3-border-top w3-border-blue" 
    style="background-image: url('image/')">
    <header class="w3-container w3-center w3-black w3-margin-bottom w3-card-2 w3-border-bottom ">
    <h3> Web &amp; Mobile Developer
     </h3></header>
    <div class="w3-container">
    <p class=""> 
    <span class="header-text  w3-xlarge">Hi, I'm Luthando Dlamini a software developer based in Durban. </span>
       
        <span class="glyphicon glyphicon-star w3-text-deep-orange"></span>
        <span class="glyphicon glyphicon-star w3-text-deep-orange"></span>
        <span class="glyphicon glyphicon-star w3-text-deep-orange"></span>
    </p>
    <div class="w3-card-16 w3-border-bottom w3-border-light-grey w3-margin-bottom"></div>
    <p>
      I have been designing and developing websites and mobile applications 
      for about three years now. You can find more 
      <a class="w3-text-blue" href="Services.php?d=<?php echo mt_rand(); ?>">here</a>.
      <hr />
      If you're in a business in need of a new website, mobile app, windows application
      or an individual who want a personal website, get in touch - I'd love to work with you.
    </p>
    </div>
    
    <div class="w3-card-2 w3-border-bottom w3-border-light-blue w3-padding-16"></div>
    </div>
</div>
<div><hr /></div>
<!--Container -->
<div class="w3-container ">
<div class="w3-card-24 w3-border-top w3-border-blue-grey">
<header class="w3-container w3-center w3-blue w3-card-2 w3-border-bottom ">
<h3>Work</h3></header>
<!--Container Collection -->
<div class="w3-container">
<p class="w3-margin-top">
<span class="w3-text-blue w3-large">Bussinesses: </span> I design and develop stunning websites &amp;
   Mobile apps to meet your business needs. I won't talk to you in technical 
   jargon. I will listen to your needs and come up 
   with a perfect plan that will ensure
   that I create a product that gives you the best possible return on your investiment.
   
</p>
<div class="w3-card-12 w3-border-bottom w3-border-light-grey w3-margin-bottom"></div>
<p><span class="w3-text-blue w3-large">Individuals:</span> Do you want a stunnig personal website or
   professional portfolio, or do you wanna promote something for yourself online ? 
   Then you are in the right place. I can help. 
   <a href="Services.php?d=<?php echo mt_rand(); ?>" class="w3-text-blue"> <i>See more</i></a> </p>
<div class="w3-card-12 w3-border-bottom w3-border-light-grey w3-margin-bottom"></div>
<div class="w3-center">
<div class="w3-left"><a class="w3-btn-floating-large w3-black"
     href="Work.php?s=<?php echo mt_rand(); ?>"> <i class="fa fa-globe  "></i> </a>
    <a class="w3-btn-floating-large w3-blue" href="Services.php?o=<?php echo mt_rand() ?>"> 
    <i class="fa fa-code"> </i> </a>
    <a class="w3-btn-floating-large w3-indigo "  data-toggle="modal" data-target="#myModal">
    <i class="fa fa-phone-square"> </i> </a></div>
    <a class="w3-btn-floating-large w3-blue w3-center" data-toggle="modal" data-target="#tutorialModal">
    <i class="fa fa-book w3-padding-top w3-xxlarge"></i></a>

    <div class="w3-right"><a href="https://github.com/LuthandoE" class="w3-btn-floating w3-purple">
    <i class="fa fa-github w3-animate-fading"></i></a>
    <a class="w3-btn-floating w3-orange" href="https://stackoverflow.com/">
    <i class="fa fa-stack-overflow  w3-animate-fading"> </i></a>
    <a class="w3-btn-floating w3-green" href="#">
    <i class="fa fa-video-camera w3-animate-fading"></i></a></div>

</div>
</div>
<div class="w3-card-2 w3-border-bottom w3-border-light-blue w3-padding-16"></div>
</div>
</div>
<div><hr /></div>
<!--Container Skills -->
<div class="w3-container ">
<div class="w3-example w3-card-24 w3-border-top w3-border-white">
  <br />
  <div class="w3-image">
      <img src="image/goe.jpg" class="w3-round-xxlarge" style="width: 100%;" /> 
  </div>
  <div class="w3-card-12 w3-border-bottom w3-border-light-grey w3-margin-bottom"></div>
</div>
</div>
</div>
</div>
<div class="w3-card-12 w3-text-white"><hr  /></div>
<div class="w3-padding-16"><h1 class="w3-center"><strong>Featured Projects</strong></h1></div>
<div class="w3-card-16 w3-border-bottom w3-border-light-white w3-margin"></div>
<!--Row Testimonials  -->
<?php include_once("tm.htm") ?>

</div>
<div class="w3-card-16 w3-border-bottom w3-border-light-teal w3-margin"></div>
<div class="w3-padding-16"><h1 class="w3-center"><strong>Contact Details</strong></h1></div>
<div class="w3-card-16 w3-border-bottom w3-border-light-grey w3-margin"></div>
<!--Row Get in touch  -->
<div class="w3-row-padding w3-margin"style="background-image: url('image/Elegant_Background-7.jpg')">
<div class="w3-col m5">
    <h3>Address</h3>
    <p>Get in touch with me...</p>
    <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;Durban, South Africa</p>
    <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i><a id="number" >
         <strong>+27 74<span id="hn">**** ***</span>
         <span id="sno" style="display: none;">6653389</span>
         </strong></a>
         </p>
    <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>
    
    <strong><a id="email_cont">luth<span id="eh">*********</span>
    <span id="es" style="display: none;">ando_dlamini@yahoo</span>.com</strong></a>
    </p>
</div>
<div class="w3-col m7">
   <form class="w3-form" method="post" >
<div class="w3-group">
    <input class="w3-input" style="width:100%;" name="name" type="text" required="" />
    <label class="w3-label">Name</label>
</div>
<div class="w3-group">
    <input id="email" name="fromEmail" class="w3-input" style="width:100%;" type="text" required="" />
    <label class="w3-label">Email</label>
</div>
<div class="w3-group">
    <textarea name="body" class="w3-input" style="width:100%;" required=""></textarea>
    <label class="w3-label">Message</label>
</div>
<div class="w3-group"> <?php echo $message; ?> </div>
<button type="submit" name="submit" class="w3-btn w3-right w3-theme">Send</button>
<div></div>
</form>
</div>
</div>

</div>
<div class="w3-center" id="dt"></div>

<!-- Footer -->
<?php include_once("footer.htm")?>
</div>
</div>

<!--git Modal -->
<div class="modal fade w3-margin" id="gitModal" role="dialog">
<div class="modal-dialog w3-card-12 active">
<div class="modal-content">
<div class="modal-header w3-black w3-card-12">
<button type="button" class="close w3-white" data-dismiss="modal">&times;</button>
<h3 class="modal-title"> Our code at GitHub  <span class="fa fa-info-circle"></span></h3>
</div>
<div class="modal-body">
<div class="w3-container w3-center">
<div class="w3-card-16 w3-white w3-border-bottom w3-border-blue" style="height:340px">
    <header class="w3-purple w3-center ">
        <h3 class="w3-padding"> luespot GitHub </h3>
    </header>
    <p><span class="w3-center ">&#10146;</span> <a href="https://github.com/LuthandoE">luespot gitHub</a></p>
    <div class="w3-card-12 w3-border-bottom w3-border-light-blue w3-padding-16"></div>
    <p class="w3-padding-12"> Most of my code is in github.</p>
    <div class="w3-card-12 w3-border-bottom w3-border-light-blue w3-padding-16"></div>
    <p class="w3-padding-8 w3-margin-top w3-margin-left w3-margin-right w3-left-align">
        This allows me to ask help from other people about the areas
        of my code that I have to improve on and also let people see my work.
    </p>
</div>
</div>
</div>
</div>
</div>
</div>

<!--Tutorial Modal -->
<div class="modal fade w3-margin" id="tutorialModal" role="dialog">
<div class="modal-dialog w3-card-12 ">
<div class="modal-content">
<div class="modal-header w3-black w3-card-12">
<button type="button" class="close w3-white" data-dismiss="modal">&times;</button>
<h3 class="modal-title"> luespot Tutorials  <span class="fa fa-info-circle"></span></h3>
</div>
<div class="modal-body">
<div class="w3-container w3-center">
<div class="w3-card-16 w3-white w3-border-bottom w3-border-blue" style="height:340px">
    <header class="w3-orange w3-center ">
        <h3 class="w3-padding"> Coming up soon!!! </h3>
    </header>
    <p><span class="w3-center ">&#10146;</span> <a href="index.php">www.luespot.com</a></p>
    <div class="w3-card-12 w3-border-bottom w3-border-light-blue w3-padding-16"></div>
    <p class="w3-padding-12 w3-padding-left">
        After creating this website I received a lot of questions
        from people who wanted to design their own websites.
    </p>
    <div class="w3-card-12 w3-border-bottom w3-border-light-blue w3-padding-16"></div>
    <p class="w3-padding-8 w3-margin-top w3-margin-left w3-margin-right w3-left-align">
        So I am planning to start basic tutorials on different technologies
        such as html,css,JavaScript and different frameworks like bootstrap and JQuery.
    </p>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include_once("ContactUs.php") ?>


<script>
function w3_open_nav(x) {
if (document.getElementById("nav_" + x).style.display == "block") {
    document.getElementById("").style.display = "block";
    w3_close_nav(x);
} else {
    w3_close_nav("collection");
    w3_close_nav("projects");
    w3_close_nav("about");
    //   w3_close_nav("testimonials");
    w3_close_nav("luespot_about");
   // w3_close_nav("search");
    document.getElementById("nav_" + x).style.display = "block";
    if (document.getElementById("navbtn_" + x)) {
        document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "none";
        document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "inline";
    }
}
}
function w3_close_nav(x) {
document.getElementById("nav_" + x).style.display = "none";
if (document.getElementById("navbtn_" + x)) {
    document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "inline";
    document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "none";
}
}
</script>
<script>
(function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('dt').innerHTML =
    "Date: " + today.toDateString() + " Time: " + h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
})();
function checkTime(i) {
    if (i < 10) { i = "0" + i };  // add zero in front of numbers < 10
    return i;
}
(function () {
    d = new Date();
    document.getElementById("dy").innerHTML = d.getFullYear();
})();
</script>
</body>
</html>
