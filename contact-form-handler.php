<?php
$errors = '';
$myemail = 'blorange@kw.com';//<-----Put Your email address here.
if(empty($_POST['form_name'])  || 
   empty($_POST['form_email']) || 
   empty($_POST['form_subject']) || 
   empty($_POST['form_phone']) || 
   empty($_POST['form_message']))
{
    $errors .= "\n Error: all fields are required";
}

$form_name = $_POST['form_name']; 
$form_email = $_POST['form_email'];
$form_subject = $_POST['form_subject']; 
$form_phone = $_POST['form_phone'];
$form_message = $_POST['form_message'];  

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}
    if( empty($errors))

{

$to = $myemail;

$email_subject = "Contact form submission: $name";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $name \n ".

"Email: $email_address\n Message \n $message";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page

header('Location: contact-form-thank-you.html');

}
?>