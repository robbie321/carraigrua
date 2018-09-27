<?php
 require '../vendor/autoload.php';

    echo 'submit clicked';
    echo '<br>';



  
  
  $firstName = $_GET['firstname'];
  $surname = $_GET['surname'];
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