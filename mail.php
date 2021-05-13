<?php
$con= mysqli_connect("localhost", "root", "", "reg") or die (mysqli_error($con));

$email=$_REQUEST["Email"];
$select_query="select * from register where email='$email'";
$select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
$total_rows_fetched=mysqli_num_rows($select_query_result);
$row=mysqli_fetch_array($select_query_result);

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "shivamguptakrm@gmail.com";
  $mail->Password = "admin@12345";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "shivamguptakrm@gmail.com";
  $mail->FromName = "shivam";
  
  $mail->addAddress($row["email"]);
  
  $mail->isHTML(true);
 
  $mail->Subject = "test mail";
  $mail->Body = "<i>this is your password:</i>".$row["pass"];
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
   echo "Message has been sent successfully";
  }
?>