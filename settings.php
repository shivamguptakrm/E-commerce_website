<?php
require'includes/common.php';
if(!isset($_SESSION['Email'])){
header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Settings | E-Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\style.css">	
</head>
<body>
	<?php
	include'includes/header.php';
	?>
	<div class="row row_style" >
		<div class="col-md-4 col-md-offset-4">
			<h2>Change Password</h2>
			<form action="settings_script.php" method="POST">
				<div class="form-group"><input class="form-control" type="password" name="Password" placeholder="Old Password" required="true"></div>
				<div class="form-group"><input class="form-control" type="password" name="newpass" placeholder="New Password" required="true"></div>
				<div class="form-group"><input class="form-control" type="password" name="newpass2" placeholder="Re-type New Password" required="true"></div>
				<input class="btn btn-primary btn-lg" type="submit" name="Change" value="Change">
				<?php
					if (isset($_GET['error'])) {
				 	echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
					}
                ?>
			</form>
		</div>
	</div>
</body>
</html>