<?php 
$errors = '';
$myemail = '';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['mail']) || 
   empty($_POST['number']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST[' mail']; 
$phone_number = $_POST['number']; 
$message = $_POST['message']; 


if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Phone Number \n $number \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	header('Location: Hire_me.html');
} 

