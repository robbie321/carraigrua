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
  
  $sg = new \SendGrid('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');

  $response = $sg->client->mail()->send()->post($mail);
  echo $response->statusCode();
  echo $response->headers();
  echo $response->body();


?>