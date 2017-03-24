<?php	
	if(empty($_POST['name_3538_12870_1065']) && strlen($_POST['name_3538_12870_1065']) == 0 || empty($_POST['email_3538_12870_1065']) && strlen($_POST['email_3538_12870_1065']) == 0 || empty($_POST['message_3538_12870_1065']) && strlen($_POST['message_3538_12870_1065']) == 0 || empty($_POST['message3_3538_12870_1065']) && strlen($_POST['message3_3538_12870_1065']) == 0)
	{
		return false;
	}
	
	$name_3538_12870_1065 = $_POST['name_3538_12870_1065'];
	$email_3538_12870_1065 = $_POST['email_3538_12870_1065'];
	$message_3538_12870_1065 = $_POST['message_3538_12870_1065'];
	$message3_3538_12870_1065 = $_POST['message3_3538_12870_1065'];
	
	$to = 'harmonynailspuebla@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from www.harmonypuebla.com.";
	$email_body = "You have received a new message. \n\n".
				  "Name_3538_12870_1065: $name_3538_12870_1065 \nEmail_3538_12870_1065: $email_3538_12870_1065 \nMessage_3538_12870_1065: $message_3538_12870_1065 \nMessage3_3538_12870_1065: $message3_3538_12870_1065 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: harmonynailspuebla@gmail.com\n";
	$headers .= "Reply-To: $email_3538_12870_1065";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>