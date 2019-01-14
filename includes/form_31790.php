<?php	
	if(empty($_POST['name_3538_12870_31790']) && strlen($_POST['name_3538_12870_31790']) == 0 || empty($_POST['email_3538_12870_31790']) && strlen($_POST['email_3538_12870_31790']) == 0 || empty($_POST['message_3538_12870_31790']) && strlen($_POST['message_3538_12870_31790']) == 0 || empty($_POST['message3_3538_12870_31790']) && strlen($_POST['message3_3538_12870_31790']) == 0)
	{
		return false;
	}
	
	$name_3538_12870_31790 = $_POST['name_3538_12870_31790'];
	$email_3538_12870_31790 = $_POST['email_3538_12870_31790'];
	$message_3538_12870_31790 = $_POST['message_3538_12870_31790'];
	$message3_3538_12870_31790 = $_POST['message3_3538_12870_31790'];
	
	$to = 'harmonynailspuebla@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_3538_12870_31790: $name_3538_12870_31790 \nEmail_3538_12870_31790: $email_3538_12870_31790 \nMessage_3538_12870_31790: $message_3538_12870_31790 \nMessage3_3538_12870_31790: $message3_3538_12870_31790 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: harmonynailspuebla@gmail.com\n";
	$headers .= "Reply-To: $email_3538_12870_31790";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>