<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'https://jack0827.github.io/Cafe7DREAM/contact.html';

$email_subject = 'New form submission';

$email_body = "User Name: $name.\n";
              "User Email: $visitor_email.\n";
              "Subject: $subject.\n";
              "User Message: $message .\n";

$to = 'changlicks@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location. contact.html");


?>
