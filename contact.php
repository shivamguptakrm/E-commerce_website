<!DOCTYPE html>
<html>
<head>
	<title>Contact | Mobile E-Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<div class="row row_style">
		<div class="container">
			<div class="col-md-9" style="text-align: justify;">
				<h2>LIVE SUPPORT</h2>
				<h4>24 hours | 7 days a week | 365 days a year Live Technical support</h4>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,you need to be sure there isn't anything emabrrassing hidden in the middle of text.</p>
			</div>
			<div class="col-md-3">
				<img src="img/contact.png" alt="Error in loading image">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="container" style="margin-bottom: 150px;">
			<div class="col-md-7">
				<h2>CONTACT US</h2>
				<form action="contact_script.php" method="POST">
					<label>Name</label>
					<div class="form-group"><input class="form-control" type="text" name="Name"  required="true"></div>
					<label>Email:</label>
					<div class="form-group"><input class="form-control" type="email" name="Email"  required="true"></div>
					<label>Message:</label>
					<div class="form-group"><textarea class="form-control" name="Message"></textarea></div>
					<button class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-md-5">
				<h2>Company Information :</h2>
				<p>B-48 beta 1, Jagat Farm</p>
				<p>273001, U.P. India</p>
				<p>Phone: +91-7007464887</p>
				<p>Fax:(000) 000 00 00 0</p>
				<p>Email: shivamguptakrm@gmail.com</p>
				<p>Follow on: Facebook, Twitter</p>
			</div>
		</div>
	</div>
	<?php include'includes/footer.php'; ?>
</body>
</html>