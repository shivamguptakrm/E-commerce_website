<?php
require 'includes/common.php';
/*if (isset($_SESSION['Email'])) {
    header('location: home.php');
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up | Mobile E-Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
	<?php include 'includes/header.php'; ?>
	
	<div class="row row_style">
		<div class="container" style="margin-bottom: 150px;">
			<div class="col-md-7"><br><br><br><br>
			<img src="img/yess.jpg" alt="Error in loading image">	
			</div>
			<div class="col-md-5" sy>
				<h2>SIGN UP</h2>
				<form action="signup_script.php" method="POST">
					<div class="form-group"><input class="form-control" type="text" name="Name" placeholder="Name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"></div>
					<div class="form-group"><input class="form-control" type="email" name="Email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
						<?php 
						if (isset($_GET['m1'])) {
							echo $_GET['m1'];
						}
						 ?></div>
					<div class="form-group"><input class="form-control" type="password" name="Password" placeholder="Password" required="true" pattern=".{6,}"></div>
					<div class="form-group"><input class="form-control" type="tel" name="Contact" placeholder="Contact" required="true">
						<?php 
						if (isset($_GET['m2'])) {
							echo $_GET['m2'];
						}
						 ?>
					</div>
					<div class="form-group"><input class="form-control" type="text" name="City" placeholder="City" required="true"></div>
					<div class="form-group"><input class="form-control" type="" name="Address" placeholder="Address" required="true"></div>
					<input class="btn btn-primary btn-lg" style="float: right;" type="submit" name="Submit">
				</form>	
			</div>
		</div>
	</div>
	<?php include "includes/footer.php"; ?>
</body>
</html>