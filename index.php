<!-- /* [-] HorridHanu */ -->
<!-- /* [+] This is totally mess up of a code... but who cares :) */ -->


<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New form submission'


$email_body = "Username: $name.\n".
                "Email Address: $visitor_email."\n.
                "Subject: $subject."\n.
                "Message: $message."\n;

$to = 'horridhanu@gmail.com';

$headers = "From: $email_from\r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")

?>