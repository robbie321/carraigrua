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



  if(isset($_POST['submit'])){
    echo 'submit clicked';
    echo '<br>';



  //   echo 'clicked : ';
  // mail($to, $subject, $content, $header);
  // header("Location: index.php?mailsend");

  $from = new SendGrid\Email(null, "Test_2@gmail.com");
  $subject = "MANUALLY ADDING IT!";
  $to = new SendGrid\Email(null, "darran.blacky@gmail.com");
  $content = new SendGrid\Content("You have recieved and email from ");
  
  // $mail = new SendGrid\Email();
  // $mail->addTo($to)->setFrom($from)->setSubject($subject)->setText($content);
  $mail = new SendGrid\Mail($from, $subject, $to, $content);
  
  $sg = new \SendGrid('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');
  
  $response = $sg->client->mail()->send()->post($mail);

  echo $response->statusCode();
  echo $response->headers();
  echo $response->body();



  

// if(!mail($mailTo, $subject, $txt, $header)){


//   echo ' failed : ';
//   echo ' mailTO : ' . $to;
//   echo ' subject : ' . $subject;
//   echo ' txt : ' . $content;
//   echo ' header : ' . $header;

//   mail('info@robbiemalone.com', 'test subject', '3 Hours', 'From : Chris Exton');
//   mail('darran.blacky@gmail.com', 'test subject', '3 Hours', 'From : Chris Exton');

}

?>