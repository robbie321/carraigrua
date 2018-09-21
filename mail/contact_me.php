<?php
 require 'vendor/autoload.php';
 if ( function_exists( 'mail' ) )
 {
     echo 'mail() is available <br> ';
  mail('13155105@studentmail.ul.ie', 'test subject', '3 Hours', 'From : Chris Exton');

 }
 else
 {
     echo 'mail() has been disabled';
 } 
 
 
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $from = $_POST['email'];
  $message = $_POST['message'];
  $to = "info@robbiemalone.com";
  $header = "From: ".$emailFrom;
  $content="You have recieved and email from ".$name.".\n\n".$message;
  // if(isset($_POST['submit'])){
  //   echo 'clicked : ';
  // mail($to, $subject, $content, $header);
  // header("Location: index.php?mailsend");

  $from = new SendGrid\Email(null, "test@example.com");
  $subject = "Hello World from the SendGrid PHP Library!";
  $to = new SendGrid\Email(null, "test@example.com");
  $content = new SendGrid\Content("text/plain", "Hello, Email!");
  $mail = new SendGrid\Mail($from, $subject, $to, $content);
  
 
  $response = $sg->client->mail()->send()->post($mail);
  echo $response->statusCode();
  echo $response->headers();
  echo $response->body();



  
}
if(!mail($mailTo, $subject, $txt, $header)){


  echo ' failed : ';
  echo ' mailTO : ' . $to;
  echo ' subject : ' . $subject;
  echo ' txt : ' . $content;
  echo ' header : ' . $header;

  mail('info@robbiemalone.com', 'test subject', '3 Hours', 'From : Chris Exton');
  mail('darran.blacky@gmail.com', 'test subject', '3 Hours', 'From : Chris Exton');

}

?>