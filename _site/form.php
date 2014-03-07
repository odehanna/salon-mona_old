<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $from = 'From: Salon-Mona'; 
    $to = 'odeh.anna@gmail.com'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit']) {
           if (mail ($to, $subject, $body, $from)) {
            header('Location: /thank-you/');
            exit;
           } else {
           echo '<p>Ah! Try again, please?</p>';
           }
       }

$errors = '';
$myemail = 'odeh.anna@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

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

