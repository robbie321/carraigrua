<?php
 require '../vendor/autoload.php';
 if ( function_exists( 'mail' ) )
 {
     echo 'mail() is available <br> ';
  // mail('13155105@studentmail.ul.ie', 'test subject', '3 Hours', 'From : Chris Exton');

 }
 else
 {
     echo 'mail() has been disabled';
 } 
  
  
  $name = $_GET['name'];
  $subject = $_GET['subject'];
  $fromMail = $_GET['email'];
  $message = $_GET['message'];
  $from = new SendGrid\Email(null, $fromMail);
  $to = new SendGrid\Email(null, "robmalone7@gmail.com");
  $content = new SendGrid\Content("text/plain", $message);
  $mail = new SendGrid\Mail($from, $subject, $to, $content);
  
  $sg = new \SendGrid("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");


  $response = $sg->client->mail()->send()->post($mail);
  echo $response->statusCode();
  echo $response->headers();
  echo $response->body();

  header('Location:http://carraigruabandb.com/contact.html')

?>