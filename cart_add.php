<?php
require 'includes/common.php';
if(!isset($_SESSION['Email'])) {
	header('location:index.php');
}
$email=$_SESSION['Email'];
$user_id=$_SESSION['id'];
$item_id=$_GET['id'];

$con= mysqli_connect("localhost", "root", "", "e-store") or die (mysqli_error($con));
$user_registration_query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart') ";
$select_query_result=mysqli_query($con,$user_registration_query) or die (mysqli_error($con));
header('location:home.php');
?>

