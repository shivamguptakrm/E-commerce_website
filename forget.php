<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forget Password | Mobile E-Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css\style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include 'includes/header.php';
    ?>
	<div class="container">
		<div class="row row_style">
			<div class=" col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 >Forget Password</h3></div>
					<div class="panel-body">
						<form action="mail.php" method="post">
							<div class="form-group">
								<input class="form-control" type="email" name="Email" placeholder="Enter your Email" required="true">
							</div>
							<center><button class="btn btn-primary">Submit</button></center>
						</form>
					</div>
				</div>		
			</div>
		</div>
	</div>
	<?php include'includes/footer.php'; ?>
</body>
</html>
