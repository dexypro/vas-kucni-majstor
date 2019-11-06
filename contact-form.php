<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'Vodoinstalacija.rs';

$email_subject = "Poruka sa sajta";

$email_body = "Ime: $name.\n".
"Email: $visitor_email.\n".
"Poruka: $message.\n";


$to = "bajovicdejan91@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply To: $visitor_email \r\n";

mail($to,email_subject,$email_body,$headers);

header("Location: poruka.html");



?>