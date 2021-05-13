<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
/*if (isset($_SESSION['Email'])) {
    header('location: home.php');
}*/
?>
<!DOCTYPE html>
<html lang="en">

<body>
	<div class="container">
		<div class="modal fade" id="mymodal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class=" modal-header" >
						<h3>Login<button type="button" class="close" data-dismiss="modal">&times;</button></h3>
					</div>
					<div class="modal-body">
						<p>Don't have an account?<a href="signup.php">Register</a></p>
						<form action="login_submit.php" method="POST">
							<div class="form-group">
								<input class="form-control" type="email" name="Email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
							</div>
							<div class="form-group">
								<input class="form-control" type="password" name="Password" placeholder="Password" required="true" pattern=".{6,}">
							</div>
							<button type="submit" name="login_button" id="login_button" class="btn btn-primary" >Login</button>
						</form><br>
						<p><a href="forget.php">Forget Password?</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
