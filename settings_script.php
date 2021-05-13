<?php 
// This page updates the user password
require 'includes/common.php'; 
if(!isset($_SESSION['Email'])) {
	header('location:index.php');
}
$con= mysqli_connect("localhost", "root", "", "e-store") or die (mysqli_error($con));
$email=$_SESSION['Email'];
$password=md5(mysqli_real_escape_string($con,$_POST['Password']));
$newpass=md5(mysqli_real_escape_string($con,$_POST['newpass']));
$newpass2=md5(mysqli_real_escape_string($con,$_POST['newpass2']));

$select_query="SELECT password FROM users WHERE Email='$email' and Password='$password' ";
$select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
$total_rows_fetched=mysqli_num_rows($select_query_result);
    if ($total_rows_fetched==0) {
        header('location: settings.php?error=Wrong Password');
    } else if ($newpass != $newpass2) {
    header('location: settings.php?error=Passwords don\'t match');
    }else {
        $con= mysqli_connect("localhost", "root", "", "e-store") or die (mysqli_error($con));
        $select_query="UPDATE `users` SET `Password` = '$newpass' WHERE `users`.`Email` = '$email' ";
        $select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
        header('location: settings.php?error=Password is Updated');
    }
?>