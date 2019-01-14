<?php	
	if(empty($_POST['name_3538_12870_8761_48846']) && strlen($_POST['name_3538_12870_8761_48846']) == 0 || empty($_POST['email_3538_12870_8761_48846']) && strlen($_POST['email_3538_12870_8761_48846']) == 0 || empty($_POST['message_3538_12870_8761_48846']) && strlen($_POST['message_3538_12870_8761_48846']) == 0 || empty($_POST['message3_3538_12870_8761_48846']) && strlen($_POST['message3_3538_12870_8761_48846']) == 0)
	{
		return false;
	}
	
	$name_3538_12870_8761_48846 = $_POST['name_3538_12870_8761_48846'];
	$email_3538_12870_8761_48846 = $_POST['email_3538_12870_8761_48846'];
	$message_3538_12870_8761_48846 = $_POST['message_3538_12870_8761_48846'];
	$message3_3538_12870_8761_48846 = $_POST['message3_3538_12870_8761_48846'];
	
	$to = 'harmonynailspuebla@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "Nuevo mensaje de Harmony Puebla \n\n".
				  "Name_3538_12870_8761_48846: $name_3538_12870_8761_48846 \nEmail_3538_12870_8761_48846: $email_3538_12870_8761_48846 \nMessage_3538_12870_8761_48846: $message_3538_12870_8761_48846 \nMessage3_3538_12870_8761_48846: $message3_3538_12870_8761_48846 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: citas@harmonypuebla.com\n";
	$headers .= "Reply-To: $email_3538_12870_8761_48846";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>