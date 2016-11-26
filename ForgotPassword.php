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
 <script>
   $(function(){
    $("a").mouseover(function(){
        $(this).addClass("w3-black");
    }).mouseout(function(){
        $(this).removeClass("w3-black");
    });
   });
   </script>
</head>
<body class="w3-light-grey w3-hide-small" 
 style="background-image:url(background-imager/Elegant_Background-6.jpg)">
  <?php include_once("Navbar.php") ?>
  <div class="container">
  	<div id="login-form">
    <form method="post" autocomplete="off">
        <hr /> 
    	<div class="col-md-12 w3-card-2 w3-margin-top w3-white w3-round-large">
 	       <div class="form-group">
            	<h2 class="w3-margin-top w3-padding-12">Retrieve your password here....</h2>
            </div>
 	       <div class="form-group">
          	  <hr />
              <label>Please enter your email to retrieve your password</label></label>
            </div>
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
            	<input type="email" name="email" class="form-control" placeholder="Enter your Email" required />
                </div>
            </div>
            <div class="form-group">
           	 <hr />
            </div>
            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
            </div>
            <div class="form-group">
            	<hr />
            </div>
        </div>
    </form>
    </div>
  </div>
</body>
</html>