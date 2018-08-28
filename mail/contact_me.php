<?php
// Check for empty fields
// if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//   http_response_code(500);
//   exit();
// }
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $emailFrom = $_POST['email'];
  $message = $_POST['message'];
  $mailTo = "info@robbiemalone.com";
  $header = "From: ".$emailFrom;
  $txt="You have recieved and email from ".$name.".\n\n".$message;
  mail($mailTo, $subject, $txt, $header);

  header("Location: index.php?mailsend");
}

if(!mail($mailTo, $subject, $txt, $header))
  http_response_code(500);


// // Create the email and send the message
// $mailTo = "robmalone7@gmail.com"; // Add your email address inbetween the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
// $subject = "Website Contact Form:  $name";
// $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
// $header = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
// $header .= "Reply-To: $email";	

// if(!mail($to, $subject, $body, $header))
//   http_response_code(500);
?>