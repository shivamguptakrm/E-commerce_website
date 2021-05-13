<?php
require 'includes/common.php';
include 'confirm.php';
if(!isset($_SESSION['Email'])) {
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home.php">E-Store</a>
			</div>
			<div class="collapse navbar-collapse" id="mynav"> 
				<ul class="nav navbar-nav navbar-right">
					<li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
				</ul>
			</div>			
		</div>
	</nav>
	<div class="row row_style">	
		<div class="col-md-4 col-md-offset-4 text-center">
			<p>Thank you for ordering from E-Store. The order shall be delivered to you shortly.</p>
			<hr>
			<p>Order some more electronic items <a  href="home.php">here</a></p>
		</div>
	</div>
</body>
</html>