<?php

    ob_start();
	session_start();
	require_once('config.php');
    require_once('lue_error_handler.php');
   
     $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	 //$dbcon = mysqli_select_db($conn ,DB_DATABASE);
     if(!$conn){
        die("Connection Failed").$conn->error;
     } else {
        
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: Forum.php");
		exit;
	}
	
	if( isset($_POST['btn-login']) ) {	
		
		$email = $_POST['userEmail']; 
		$upass = $_POST['password'];
        
        $email = strip_tags(trim($email));
		$upass = strip_tags(trim($upass));
         
		$password = hash('sha256', $upass); // password hashing using SHA256
		
		$res = $conn->query("SELECT userid, username, email, pass FROM users WHERE email = '$email'");
		
		$row = mysqli_fetch_array($res);
		
		$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
		//$password = hash('sha256', $upass);
		if( $count == 1 && $row['pass']== $password) {
			$_SESSION['user'] = $row['userid'];
			header("Location: Forum.php");
		} else {
			$errMSG = "Wrong Credentials, Try again...";
		}
	   }
     }
    
?>
<!DOCTYPE html>
<html>
<head>
    <script src="assets/projs/gamejs.js"></script>
    <link rel="stylesheet" href="assets/css/style.css"   type="text/css"/>
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
<body class="w3-hide-small" style="background-image: url(background-imager/Elegant_Background-6.jpg);">
 <?php include_once("NavBar.php") ?>
 <?php include_once("ContactUs.php") ?>
<div class="container">
   
   	<div id="login-form">
    <form method="post" autocomplete="off">
        <hr />
    	<div class="col-md-12 w3-card-2 w3-margin-top w3-white w3-round-large">
           
	        <div class="form-group"><h2 class="">Sign In</h2></div>
        	<div class="form-group"><hr /></div>
            
            <?php
			if ( isset($errMSG) ) {
				
				?>
				<div class="form-group">
            	<div class="alert alert-danger">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
			}
			?>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            	<input type="email" name="userEmail" class="form-control" placeholder="Your Email" required="" />
                </div>
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="password" name="password" class="form-control" placeholder="Your Password" required="" />
                </div>
                <input type="checkbox"/> Remember me
                 &nbsp;<span class="w3-text-grey">|</span>
                 &nbsp;<a href="ForgotPassword.php?id= <?php echo mt_rand(); ?>">Forgot password..? </a>
            </div>
            
            <div class="form-group"><hr /></div>
            
            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
            </div>
            
            <div class="form-group"><hr /></div>
        
        </div>
    </form>
    </div>	
</div>
</body>
</html>