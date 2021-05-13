<?php
require 'includes/common.php';

    $email= mysqli_real_escape_string($con,$_POST['Email']);
    $password=md5(mysqli_real_escape_string($con,$_POST['Password']));

    $con= mysqli_connect("localhost", "root", "", "e-store") or die (mysqli_error($con));
    $select_query="SELECT id FROM users WHERE `Email`='$email' and `Password`='$password' ";
    $select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
    $total_rows_fetched=mysqli_num_rows($select_query_result);
    //echo "$total_rows_fetched";
    $row=mysqli_fetch_array($select_query_result);
    $id=$row['id'];
    
    if(mysqli_num_rows($select_query_result) > 0) {
        $select_query1="INSERT INTO users_login(Email,Password) VALUES('" . $email . "','" . $password . "') ";
        $select_query_result1=mysqli_query($con,$select_query1) or die (mysqli_error($con));
        $_SESSION['Email']=$email;
        $_SESSION['id']=$id;
    	header('location:home.php');
    } else {
    	header('location:index.php');
    }
?>