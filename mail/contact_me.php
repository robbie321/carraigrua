<?php
 

 if(isset($_POST['submit'])){
  echo 'passed : ';
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
if(!mail($mailTo, $subject, $txt, $header)){


  echo 'failed : ';
  echo 'mailTO : ' . $mailTo;
  echo 'subject : ' . $subject;
  echo 'txt : ' . $txt;
  echo 'header : ' . $header;

  mail("info@robbiemalone.com", "test subject", "3 Hours", "From : Chris Exton");
}

?>