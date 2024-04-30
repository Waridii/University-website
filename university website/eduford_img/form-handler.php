<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'email@gmail.com';

$email_body = "$user Name: $name.\n".
               "$user Email: $visitor_email.\n".
                "Subject: $subject.\n".
                 "$user Message: $message.\n";


$to = 'rosemakandahh@gmail.com';

$headers = "From: $email_from \r\n";


$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");

?>