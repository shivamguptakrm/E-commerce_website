<?php
$con= mysqli_connect("localhost", "root", "", "e-store") or die (mysqli_error($con));
$name= mysqli_real_escape_string($con,$_POST['Name']);
$email= mysqli_real_escape_string($con,$_POST['Email']);
$message= mysqli_real_escape_string($con,$_POST['Message']);

$user_registration_query="insert into contact(Name,Email,Message) VALUES ('$name','$email','$message') ";
$select_query_result=mysqli_query($con,$user_registration_query) or die (mysqli_error($con));
header('location:index.php')
?>