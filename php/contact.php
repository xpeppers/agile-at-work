<?php

/*
 * ------------------------------------
 * Contact Form Configuration
 * ------------------------------------
 */
 
$to    = "test@surjithctly.in"; // <--- Your email ID here
$subject_txt = "$name sent you a message via Event Website"; // <--- Contact for Subject here.

/*
 * ------------------------------------
 * END CONFIGURATION
 * ------------------------------------
 */
 
$name  = $_REQUEST["first_name"]  . ' ' . $_REQUEST["last_name"] ;
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$msg   = $_REQUEST["message"];

if (isset($email) && isset($name)) {
    $subject  = $subject_txt;
	$website = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "From: $name<br/> Email: $email <br/> Phone: $phone <br/>Message: $msg <br><br> -- <br>This e-mail was sent from a contact form on $website";
	
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