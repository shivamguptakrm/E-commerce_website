<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome | Mobile E-Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css\style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include 'includes/header.php';
	include 'login.php';
    ?>
	<div class="container-fluid">
		<div class="row row_style">
			<div class=" col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 >Mobile 1</h3></div>
					<div class="panel-body">
						<img src="img/61Rl-Xf5ZhL._AC_UY327_FMwebp_QL65_.webp" alt="Error in loading image">
						<p>HUAWEI Y9s (Midnight Black, 6GB RAM, 128GB Storage)<br>Rs 19,990</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						<p><a href="#" data-target="#mymodal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Order Now</a></p>           <?php                             
						} 
						?>
					</div>
				</div>	
			</div>
			<div class=" col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 >Mobile 2</h3></div>
					<div class="panel-body">
						<img src="img/816RTtou9zL._AC_UY327_FMwebp_QL65_.webp" alt="Error in loading image">
						<p>Samsung Galaxy M30 (Gradation Blue, 4GB RAM, 64GB Storage)<br>Rs 12,999</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						<p><a href="#" data-target="#mymodal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Order Now</a></p>           <?php                             
						} 
						?>
					</div>
				</div>	
			</div>
			<div class=" col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 >Mobile 3</h3></div>
					<div class="panel-body">
						<img src="img/51ZoulFBPGL._AC_UY327_FMwebp_QL65_.webp" alt="Error in loading image">
						<p>Vivo Y91i (Fusion Black, 2GB RAM, 32GB Storage)<br>Rs 7,889</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						<p><a href="#" data-target="#mymodal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Order Now</a></p>           <?php                             
						} 
						?>
					</div>
				</div>	
			</div>
		</div>
		<div class="row" style="margin-bottom: 150px;">
			<div class=" col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 >Mobile 4</h3></div>
					<div class="panel-body">
						<img src="img/51Ko2yS03EL._AC_UY327_FMwebp_QL65_.webp" alt="Error in loading image">
						<p>Vivo Y12 (Burgundy Red, 3GB RAM, 64GB Storage)<br>Rs 10,990</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						<p><a href="#" data-target="#mymodal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Order Now</a></p>           <?php                             
						} 
						?>
					</div>
				</div>	
			</div>
			<div class=" col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 >Mobile 5</h3></div>
					<div class="panel-body">
						<img src="img/61Z-7BVaFUL._AC_UY327_FMwebp_QL65_.webp" alt="Error in loading image">
						<p>Redmi Note 8 (Neptune Blue, 6GB RAM, 128GB Storage)<br>Rs 14,499</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						<p><a href="#" data-target="#mymodal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Order Now</a></p>           <?php                             
						} 
						?>
					</div>
				</div>	
			</div>
			<div class=" col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 >Mobile 6</h3></div>
					<div class="panel-body">
						<img src="img/71uTo5R3GqL._AC_UY327_FMwebp_QL65_.webp" alt="Error in loading image">
						<p>LG W30 (Aurora Green, 3GB RAM, 32GB Storage)<br>Rs 9,800</p>
						<?php if (!isset($_SESSION['Email'])) { ?>                                 
						<p><a href="#" data-target="#mymodal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Order Now</a></p>           <?php                             
						} 
						?>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<?php include'includes/footer.php'; ?>
</body>
</html>