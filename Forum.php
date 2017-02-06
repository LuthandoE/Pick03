
<?php 

    ob_start();
	session_start();
    require_once("lue_error_handler.php");
	require_once 'config.php';  
	
	if( !isset($_SESSION['user']) ) {
		header("Location: SignIn.php");
		exit;
	}
	// select loggedin users detail
    $sucMessage = "";
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	$res = $conn->query("SELECT * FROM users WHERE userid=".$_SESSION['user']);
	$userRow = mysqli_fetch_array($res);
    $userid = $_SESSION['user'];
    if (isset($_POST['send'])) {
        
        $message = test_input($_POST['msg']);
        $message = filter_var($message, FILTER_SANITIZE_STRING);
         
        $message = $conn->real_escape_string($message);
       
        $stmt = $conn->prepare("INSERT INTO post ( userid,message, posted_on) VALUES (?,?,NOW())");
        $stmt->bind_param("ss", $userid, $message);
        $stmt->execute(); 
        $stmt->close();
        $sucMessage = "<span class ='w3-text-green'>Message posted successfully!</span>";
        
        $res = $conn->query("SELECT post.message,post.posted_on,users.username FROM 
                          post INNER JOIN users ON post.userid = users.userid ORDER BY
                          post.posted_on DESC LIMIT 10");
        // $userRow = mysqli_fetch_array($res);
         $result = '';
         while($row = mysqli_fetch_array($res)){
            $result.= '<hr/><div  class="w3-light-grey w3-padding w3-round-xlarge w3-margin-60">'.
            '<strong> @'.$row['username'].'</strong>'.'<br/> '.
            '<span class ="ka">'.$row['message'].'</span>'.'<br/>'.
            '<span class ="w3-tiny">'.$row['posted_on'].'</span>'.'</div>';
         }
     }
     $res = $conn->query("SELECT post.message,post.posted_on,users.username FROM 
                          post INNER JOIN users ON post.userid = users.userid ORDER BY
                          post.posted_on DESC LIMIT 10");
                          
    // $userRow = mysqli_fetch_array($res);
     $result = '';
     while($row = mysqli_fetch_array($res)){
        $result.= '<hr/> <div  class="w3-light-grey w3-round-xlarge w3-padding w3-margin-60">'.
        '<strong> @'.$row['username'].'</strong>'.'<br/> '.
        '<span class ="">'.$row['message'].'</span>'.'<br/>'.
        '<span class ="w3-tiny">'.$row['posted_on'].'</span>'.'</div>';
     }
     
     $conn->close();
     
    
    
?>
<!DOCTYPE html>
<html>
<head>
    <script src="assets/projs/gamejs.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/w3.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css"   type="text/css"/>
    <link href="assets/font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet" />
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .header-text{ font-family: Brush Script MT, cursive;}
        .cl{text-shadow: 2px 2px 5px white;}
        .co{text-shadow: 2px 2px 5px orange;}
        .cb{text-shadow: 2px 2px 5px black;}
        .cp{text-shadow: 2px 2px 5px green;}
        .ka{width: 200px;}
    </style>
</head>
<body class="" style="background-image: url(background-imager/Elegant_Background-6.jpg);">
  <?php include_once ("NavBarC.htm") ?>
  <?php include_once ("ContactUs.php") ?>
 <div class="w3-margin-24" ><hr /></div> 
  <div class="container-fluid w3-margin"> 
    <div class="w3-row-padding w3-light-grey w3-round-large">
      
       <div class="w3-quarter w3-hide-small">
         <div class="w3-card-2 w3-round-large w3-white">
            <header class="w3-padding w3-purple w3-round-large">
             <span class="fa fa-comment"></span> Talk To Us</header>
             <p class="w3-padding">Share your experience with us. Or if you have 
              any area that you think we should improve on then
              talk to us.</p>
               <hr /> <br />
         </div>
       </div>
       
       <div class="w3-half">
          <div class="w3-card-2 w3-round-large w3-white">
             <div class="w3-card w3-round-large">
                <form class="w3-form w3-margin-left w3-margin-right" method="post">
                   <div class="w3-group">
                   <label class="w3-label w3-text-dark-grey"><b>Write to us: <?php echo $userRow['username'] ?></b></label>
                   <textarea class="w3-input w3-border w3-light-grey form-control" name="msg" required=""></textarea>
                   <div class="w3-padding-top">
                    <div class="w3-right"> <button type="submit" id="post" name="send"
                    class="btn btn-block btn-primary" >Post</button></div></div> 
                   </div>
                </form>
                <form method="post">
                <div class=" w3-margin-12" id="scroll">
                      <?php echo $result; ?>
                      
                </div></form>
             </div>
          </div>
       </div>
       
       <div class="w3-quarter">&nbsp;</div>
    </div>
  </div> 
  <div class="w3-margin-24 w3-hide-small" ><hr /></div>
</body>
</html>