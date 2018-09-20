<?php
 

if(isset($_POST['name'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $emailFrom = $_POST['email'];
  $message = $_POST['message'];
  $mailTo = "info@robbiemalone.com";
  $header = "From: ".$emailFrom;
  $txt="You have recieved and email from ".$name.".\n\n".$message;
  
  $send = mail($mailTo, $subject, $body, $headers);

  if($send){
    echo '<br>';
    echo 'Thanks for contacting me. I will be with you shortly';
  } else {
    echo 'Error: mjknejikntfjikr ';
  }
  
}
?>