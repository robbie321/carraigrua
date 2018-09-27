<?php
 require '../vendor/autoload.php';
//  if ( function_exists( 'mail' ) )
//  {
//      echo 'mail() is available <br> ';
//   mail('13155105@studentmail.ul.ie', 'test subject', '3 Hours', 'From : Chris Exton');

//  }
//  else
//  {
//      echo 'mail() has been disabled';
//  } 
 
 
  // $name = $_POST['name'];
  // $subject = $_POST['subject'];
  // $from = $_POST['email'];
  // $message = $_POST['message'];
  // $to = "darran.blacky@gmail.com";

  // $header = "From: ".$emailFrom;
  // $content="You have recieved and email from ".$name.".\n\n".$message;



  // if(isset($_POST['submit'])){
    echo 'submit clicked';
    echo '<br>';



  //   echo 'clicked : ';
  // mail($to, $subject, $content, $header);
  // header("Location: index.php?mailsend");


  
  
  $firstName = $_GET['firstname'];
  $surname = $_GET['surname'];
  $subject = $_GET['subject'];
  $fromMail = $_GET['email'];
  $message = $_GET['message'];
  $from = new SendGrid\Email(null, $fromMail);
  $to = new SendGrid\Email(null, "robmalone7@gmail.com");
  $content = new SendGrid\Content("text/plain", $message);
  $mail = new SendGrid\Mail($from, $subject, $to, $content);
  
  

  $response = $sg->client->mail()->send()->post($mail);
  echo $response->statusCode();
  echo $response->headers();
  echo $response->body();


?>