<?php
require_once('config.php');
require_once('lue_error_handler');

class Chat{
    private $mysqli;
    
    function __construct(){
        $this->mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    }
    function __destruct(){
        $this->mysqli ->close();
    }
   //Register new user
   public function register($username,$email,$password,$btnSumit){
    if(isset($btnSumit)) {
	//Sanitizing input
    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);	
	$username = $this ->mysqli->real_escape_string($username);
    $email = $this ->mysqli->real_escape_string($email);
    $password = $this ->mysqli->real_escape_string($email);
    
	// password encrypt using SHA256();
	$password = hash('sha256', $password);
	
	// check email exist or not
	$query = "SELECT email FROM users WHERE email='$email'";
	$result = mysqli_query($query);
	
	$count = mysqli_num_rows($result); // if email not found then proceed
	
	if ($count==0) {
		
		$query = "INSERT INTO users(username,email,pass,created_on) VALUES('$uname','$email','$password',NOW())";
		$res = mysqli_query($query);
		
		if ($res) {
			$errTyp = "success";
			$errMSG = "successfully registered, you may <a href= 'index.php' class='w3-text-blue'> login now </a>>>> ";
		} else {
			$errTyp = "danger";
			$errMSG = "Something went wrong, try again later...";	
		}	
			
	} else {
		$errTyp = "warning";
		$errMSG = "Sorry Email already in use ...";
	}
	
     }
   }
   //Truncates() Delete messaqges in the db
   public function deleteAllMessage(){
     $query = 'TRUNCATE TABLE chat';
     $result = $this ->mysqli->query($query);
   } 
   public function postNewMessage($user_name,$message,$color){
     $user_name = $this  ->mysqli->real_escape_string($user_name);
     $message = $this  ->mysqli->real_escape_string($message);
     $color = $this  ->mysqli->real_escape_string($color);
     
     $query = 'INSERT INTO chat(posted_on,user_name,message,color)'.
     ' VALUES(
     NOW(),
     "'. $user_name . '",
     "'. $message .'",
     "'. $color .'")';
     $result = $this ->mysqli->query($query);
   }
   public function getNewMessages($id=0){
    $id = $this->mysqli->real_escape_string($id);
    if($id>0){
        $query = 
        '
        SELECT postid,user_name,message,DATE_FORMAT(posted_on,"%H:%i%s")
        AS posted_on FROM chat WHERE postid>'
        .$id.'ORDER BY postid ASC';
    } else{
        $query = 
        '
         SELECT postid,userid,message,posted_on
         FROM(SELECT message_id,user_name,message,DATE_FORMAT(posted_on,"%H:%i%s")
         AS posted_on FROM chat ORDER BY postid DESC LIMIT 10)
         ORDER BY message_id ASC';
    }
    $result = $this ->mysqli->query($query);
      

  }
}

?>