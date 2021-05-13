<?php
require("includes/common.php");
//session_start();

  $con= mysqli_connect("localhost", "root", "", "e-store") or die (mysqli_error($con));
	$name= mysqli_real_escape_string($con,$_POST['Name']);
  $email= mysqli_real_escape_string($con,$_POST['Email']);
  $password= mysqli_real_escape_string($con,$_POST['Password']);
  $password=MD5($password);
  $contact= mysqli_real_escape_string($con,$_POST['Contact']);
  $city= mysqli_real_escape_string($con,$_POST['City']);
  $address= mysqli_real_escape_string($con,$_POST['Address']);
  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM users WHERE Email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span class='red'>This Email-id is already registered.</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Contact number is invalid.</span>";
    header('location: signup.php?m2=' . $m);
  } else {
    $user_registration_query="INSERT INTO users(Name,Email,Password,Contact,City,Address) VALUES ('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
    $select_query_result=mysqli_query($con,$user_registration_query) or die (mysqli_error($con));
    $select_query="SELECT id FROM users WHERE Email='$email'";
    $select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
    $row=mysqli_fetch_array($select_query_result);
    $id=$row['id'];
    $_SESSION['Email']=$email;
    $_SESSION['id']=$id;
    header('location:home.php');
  }
?>