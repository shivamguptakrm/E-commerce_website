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
	<title>Cart | E-Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
	<?php
	include'includes/header.php';
	?>
	<div class="row row_style">	
		<div class="col-md-4 col-md-offset-4">
	    	<table class="table table-striped table-responsive" >
	    		<thead>
	    			<tr>
	    				<th>Item Number</th>
	    				<th>Price</th>
	    			</tr>
	    		</thead>
	    		<?php
	    			$sum=0;
	    			$id='';
	    			$user_id=$_SESSION['id'];
	    			$con= mysqli_connect("localhost", "root", "", "e-store") or die (mysqli_error($con));
	    			$query="SELECT items.id AS id, items.price AS Price FROM users_items JOIN items ON users_items.item_id=items.id WHERE users_items.user_id='$user_id' AND status='Added to cart'";
	    			$result=mysqli_query($con,$query) or die(mysqli_error($con));
	    			if (mysqli_num_rows($result)>=1){
	    		?>
	    		<tbody>
	    			<?php
	    			while ($row=mysqli_fetch_array($result)) {
	    				$sum+=$row["Price"];
	    				echo "<tr><td>"."#".$row["id"]."</td><td>".$row["Price"]."</td><td><a href='cart_remove.php?id={$row['id']}' >Remove</a></td></tr>";
	    			}
	    			$id=rtrim($id,",");
	    			echo "<tr><td>Total</td><td>Rs".$sum."</td><td><a href='success.php?items_id=".$id."' class='btn btn-primary'>Confirm Order</a></td></tr>";
					?>
	    		</tbody>
	    			<?php
	    			} 
	    			?>
	    	</table>
		</div>
	</div>
</body>
</html>