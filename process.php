<?php 
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

echo "<pre>";
$email_body = "";
$email_body .= "Name " . $name . "\n";
$email_body .=  "E-mail " . $email . "\n";
$email_body .=  "Message " . $message . "\n";
echo $email_body;
echo "</pre>"
?>