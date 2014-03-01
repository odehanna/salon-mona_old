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
           echo '<p>Message Sent Successfully!</p>';
           } else {
           echo '<p>Ah! Try again, please?</p>';
           }
       }
 ?>