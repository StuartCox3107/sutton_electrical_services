Thanks for your message, we'll be in touch soon!

<?php 

    $userName 		= $_POST['Name'];
    $userEmail	 	= $_POST['Email'];
    $userPhone	 	= $_POST['Phone'];
	$userMessage 		= $_POST['Message'];

	$to 			= "coxstuart@hotmail.com";
	$subject 		= "Web enquiry";
	$body 			= "Information Submitted:";

	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;

	mail($to, $subject, $body);

?>
