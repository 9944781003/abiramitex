

<?php

$to      = 'mmanieee@gmail.com';
//$to      = 'mailtoarull@gmail.com';
$subject = 'Comment From Website';
$message = 'Message From '.$_POST["name"].' And the Message he sent is  : '.$_POST['message'].'';
$headers = 'From: '.$_POST["email"].'' . "\r\n" .
    'Reply-To:'.$_POST["email"].'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
header('Location: contact.html');




?>
