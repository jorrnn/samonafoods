<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'samona2006@yahoo.com';

$email_subject = 'New Form Submission';

$email_body ="User Name: $name.\n".
             "visitor-email: $visitor_email.\n".
             "subject: $subject.\n".
             "message: $message.\n";



$to = 'samona2006@yahoo.com';

$header = "from: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers)

header("location: contact.html");
?>