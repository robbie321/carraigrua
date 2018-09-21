<?php
 
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
  $emailFrom = $_POST['email'];
  $message = $_POST['message'];
  $mailTo = "info@robbiemalone.com";
  $header = "From: ".$emailFrom;
  $txt="You have recieved and email from ".$name.".\n\n".$message;
  if(isset($_POST['submit'])){
    echo 'clicked : ';
  mail($mailTo, $subject, $txt, $header);
  header("Location: index.php?mailsend");
}
if(!mail($mailTo, $subject, $txt, $header)){


  echo 'failed : ';
  echo 'mailTO : ' . $mailTo;
  echo 'subject : ' . $subject;
  echo 'txt : ' . $txt;
  echo 'header : ' . $header;

  mail('info@robbiemalone.com', 'test subject', '3 Hours', 'From : Chris Exton');
  mail('darran.blacky@gmail.com', 'test subject', '3 Hours', 'From : Chris Exton');

}

?>