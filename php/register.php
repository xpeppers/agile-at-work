<?php

/*
 * ------------------------------------
 * Registration Form Configuration
 * ------------------------------------
 */
 
$to    = "test@surjithctly.in"; // <--- Your email ID here
$subject_txt = "New Event Registration : $name"; // <--- Email Subject here.

/*
 * ------------------------------------
 * END CONFIGURATION
 * ------------------------------------
 */
 
$name  = $_REQUEST["first_name"]  . ' ' . $_REQUEST["last_name"] ;
$email = $_REQUEST["email"];
$pass = $_REQUEST["pass"];
$seats   = $_REQUEST["seats"];

if (isset($email) && isset($name)) {
    $subject  = $subject_txt;
	$website = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "Hello, <br><br> $name is registered for the event. See details below. <br><br> From: $name<br/> Email: $email <br/> Selected Pass: $pass <br/>No. of Seats: $seats <br><br> -- <br>This registration was submitted on $website";
	
   $mail =  mail($to, $subject, $msg, $headers);
  if($mail)
	{
		echo 'success';
	}

else
	{
		echo 'failed';
	}
}

?>