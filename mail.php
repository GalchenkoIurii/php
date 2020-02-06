<?php

$to       = 'galchenkou@gmail.com';
$subject  = 'some subject';
$message  = 'some message';
$headers  = "From: test@gmail.com\nReply-To: test@gmail.com\n";
$headers .= "Content-Type: text/html; charset='utf-8'\n";

if(mail($to, $subject, $message, $headers)) {
    echo "mail has been sent";
}
