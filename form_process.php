 <?php

$name = $_POST['name']；
$email = $_POST['email']；
$message = $_POST['message']；
$to = "gaotx88@gmail.com";
$subject = "New Message";

mail($to, $subject, $message, "From: " . $name);
echo "Your Message has been sent!";


 ?>