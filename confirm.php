<?php
//require("includes/common.php");
if (!isset($_SESSION['Email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['id'];
$con= mysqli_connect("localhost", "root", "", "e-store") or die (mysqli_error($con));
$query="SELECT item_id FROM users_items WHERE user_id='$user_id' ";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
	while ($row=mysqli_fetch_array($result));{
		$query1 = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . "  and status='Added to cart'";
		mysqli_query($con, $query1) or die($mysqli_error($con));
	}
//We will change the status of the items purchased by the user to 'Confirmed'AND item_id IN (" . $item_ids_string . ")
?>
