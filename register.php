<?php
//ob_start();
//session_start();
//if( isset($_SESSION['user'])!="" ){
//	header("Location: SignIn.php");
//}
require_once ('lue_error_handler.php');
require_once ('chat.php');

            $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
            if (isset($_POST['btn-signup'])) {
            
            $email = test_input($_POST['email']);
          
            if (strlen($_POST['pass']) < 8) {
                    $errTyp = "danger";
                    $errMSG = "Password too short!";
                    
               
             } else  if (!preg_match("#[a-zA-Z]+#", $_POST['pass'])) {
                        $errTyp = "danger";
                        $errMSG = "Password must include at least one letter!";
              } else if (!preg_match("#[0-9]+#", $_POST['pass'])){ 
                        $errTyp = "danger";
                        $errMSG = "Password must include at least one number!";
              } else {
                    if (!preg_match("/^[a-zA-Z ]*$/",$_POST['uname'])) {
                        $errTyp = "danger";
                        $errMSG = "Only letters and white space allowed for username"; 
                    }
                    else {
                        $uname = test_input($_POST['uname']);
                        $upass = test_input($_POST['pass']);
                        $uname = filter_var($uname, FILTER_SANITIZE_STRING);
                        $email = filter_var($email, FILTER_SANITIZE_STRING);
                        $upass = filter_var($upass, FILTER_SANITIZE_STRING);
                            
                        $uname = $conn->real_escape_string($uname);
                        $email = $conn->real_escape_string($email);
                        $upass = $conn->real_escape_string($upass);
                        
                        
                        // password encrypt using SHA256();
                        $password = hash('sha256', $upass);
                         
                        $query = "SELECT email FROM users WHERE email=?";
                        $stmt = $conn->prepare($query);
                        $stmt -> bind_param("s",$email);
                        //$result = $conn->query($query);
                        $stmt ->execute();
                        $stmt -> store_result();
                       // $count = mysqli_num_rows($result); 
                       // if email not found then proceed

            if ($stmt-> num_rows == 0) {   
               
                $stmt = $conn->prepare("INSERT INTO users (username, email, pass,created_on) VALUES (?, ?, ?,NOW())");
      
                $stmt->bind_param("sss", $uname, $email, $password);
                $res = $stmt->execute();   

                if ($res) {
                    $errTyp = "success";
                    $errMSG = "successfully registered, you may <a href= 'SignIn.php' class='w3-text-blue'> login now </a>>>> ";
                } else {
                    $errTyp = "danger";
                    $errMSG = "Something went wrong, try again later...";
                }

            } else {
                $errTyp = "warning";
                $errMSG = "Sorry Email already in use ...";
          }
          $stmt->close();
          $conn->close();
              }    
          }            
     }

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Register</title>
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
<body  style="background-image: url(background-imager/Elegant_Background-6.jpg);">
     <?php include_once ("NavBar.php") ?>
     <?php include_once ("ContactUs.php") ?>
    <div class="container">
        <div id="login-form" class="w3-white">
            <form method="post" autocomplete="off" >
    
        <hr />

    	<div class="col-md-12 w3-card-2 w3-margin-top w3-white w3-round-large ">
        	<div class="form-group">
            	<h2 class=""> Sign Up</h2>
            </div>
        
        	<div class="form-group">
    	        <hr />
            </div>
            
            <?php
            if (isset($errMSG)) {
            
            ?>
				<div class="form-group">
            	<div class="alert alert-<?php echo ($errTyp == "success") ?"success" : $errTyp; ?>">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
            }
            ?>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            	<input type="text" name="uname" class="form-control" placeholder="Enter Username" required="" />
                </div>
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            	<input type="email" name="email" class="form-control" placeholder="Enter Your Email" required="" />
                </div>
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="password" name="pass" class="form-control" placeholder="Enter Password" required="" />
                </div>
            </div>
            
            <div class="form-group">
   	         <hr />
            </div>
            
            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
            </div>
            
            <div class="form-group">
   	         <hr />
            </div>
        
          </div>
          
         </form>         
         </div>
      </div>
      
   </div>
   

</body>
</html>