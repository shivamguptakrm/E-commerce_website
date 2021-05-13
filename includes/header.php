<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
				<?php
                if (isset($_SESSION['Email'])) {
                    ?>
				<a class="navbar-brand" href="home.php">E-Store</a>
				<?php
                } else {
                    ?>
                <a class="navbar-brand" href="index.php">E-Store</a>
                <?php
                    }
                    ?>
		</div>
		<div class="collapse navbar-collapse" id="mynav"> 
			<ul class="nav navbar-nav navbar-right">
				<?php
                if (isset($_SESSION['Email'])) {
                ?>
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
				<li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

                   
                <?php
                } else {
                    ?>
				<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="#" data-target="#mymodal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<li><a href="about.php"><span class="glyphicon glyphicon-list-alt"></span> About Us</a></li>
				<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
			    <?php
                    }
                    ?>
			</ul>
		</div>			
	</div>
</nav>
