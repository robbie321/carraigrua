<?php
 

if(isset($_POST['n'])){
  $name = $_POST['n'];
  $subject = $_POST['subject'];
  $emailFrom = $_POST['e'];
  $message = $_POST['m'];
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