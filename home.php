<?php
require 'includes/common.php';
if(!isset($_SESSION['Email'])) {
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mobile E-Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
	<?php
	include'includes/header.php';
	include 'includes/check_if_added.php';
	?>
	<div class="container-fluid">
		<div class="row row_style">
			<div class=" col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 ># 1</h3></div>
					<div class="panel-body">
						<img src="img/61Rl-Xf5ZhL._AC_UY327_FMwebp_QL65_.webp" alt="Error in loading image">
						<p>HUAWEI Y9s (Midnight Black, 6GB RAM, 128GB Storage)<br>Rs 19,990</p>
						<?php
						//We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart(1) != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						?>                                     
						<a href="cart_add.php?id=1" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						<?php                                 
					    }                             
				   		?>  
					</div>
				</div>	
			</div>
			<div class=" col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 ># 2</h3></div>
					<div class="panel-body">
						<img src="img/816RTtou9zL._AC_UY327_FMwebp_QL65_.webp" alt="Error in loading image">
						<p>Samsung Galaxy M30 (Gradation Blue, 4GB RAM, 64GB Storage)<br>Rs 12,999</p>
						<?php                          
						  //We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart(2) != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						?>                                     
						<a href="cart_add.php?id=2" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						<?php                                 
						}                             
						?>  
					</div>
				</div>	
			</div>
			<div class=" col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 ># 3</h3></div>
					<div class="panel-body">
						<img src="img/51ZoulFBPGL._AC_UY327_FMwebp_QL65_.webp" alt="Error in loading image">
						<p>Vivo Y91i (Fusion Black, 2GB RAM, 32GB Storage)<br>Rs 7,889</p>
						<?php                          
						    //We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart(3) != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
						?>                                     
						<a href="cart_add.php?id=3" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
						<?php                                 
						}                             
						?>  
					</div>
				</div>	
			</div>
		</div>
		<div class="row" style="margin-bottom: 150px;">
			<div class=" col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 ># 4</h3></div>
					<div class="panel-body">
						<img src="img/51Ko2yS03EL._AC_UY327_FMwebp_QL65_.webp" alt="Error in loading image">
						<p>Vivo Y12 (Burgundy Red, 3GB RAM, 64GB Storage)<br>Rs 10,990</p>
						<?php                          
						  	//We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart(4) != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
				  		?>                                     
				  		<a href="cart_add.php?id=4" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
					  	<?php                                 
					    }                             
                        ?>  
					</div>
				</div>	
			</div>
			<div class=" col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 ># 5</h3></div>
					<div class="panel-body">
						<img src="img/61Z-7BVaFUL._AC_UY327_FMwebp_QL65_.webp" alt="Error in loading image">
						<p>Redmi Note 8 (Neptune Blue, 6GB RAM, 128GB Storage)<br>Rs 14,499</p>
						<?php                          
						  	//We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart(5) != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
				  		?>                                     
				  		<a href="cart_add.php?id=5" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
				  		<?php                                 
					    }                             
                     	?>  
					</div>
				</div>	
			</div>
			<div class=" col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 ># 6</h3></div>
					<div class="panel-body">
						<img src="img/71uTo5R3GqL._AC_UY327_FMwebp_QL65_.webp" alt="Error in loading image">
						<p>LG W30 (Aurora Green, 3GB RAM, 32GB Storage)<br>Rs 9,800</p>
						<?php                          
						  	//We have created a function to check whether this particular product is added to cart or not.                                 
						  	if (check_if_added_to_cart(6) != 0)  { 
						  	//This is same as if(check_if_added_to_cart != 0)                                     
						  		echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
						  	} else {                                     
				  		?>                                     
				  		<a href="cart_add.php?id=6" name="item_id" value="1" class="btn btn-block btn-primary">Add to cart</a>
					  	<?php                                 
					    }                             
                     	?>  
					</div>
				</div>	
			</div>
		</div>
	</div>
</body>
</html>