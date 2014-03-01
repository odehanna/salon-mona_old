<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $from = 'From: Salon-Mona'; 
    $to = 'odeh.anna@gmail.com'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>