<?php	
	if (empty($_POST['name_22347']) && strlen($_POST['name_22347']) == 0 || empty($_POST['email_22347']) && strlen($_POST['email_22347']) == 0 || empty($_POST['message_22347']) && strlen($_POST['message_22347']) == 0)
	{
		return false;
	}
	
	$name_22347 = $_POST['name_22347'];
	$email_22347 = $_POST['email_22347'];
	$select_2957 = $_POST['select_2957'];
	$message_22347 = $_POST['message_22347'];
	$optin_22347 = $_POST['optin_22347'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_22347: $name_22347 \nEmail_22347: $email_22347 \nSelect_2957: $select_2957 \nMessage_22347: $message_22347 \nOptin_22347: $optin_22347 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_22347";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>