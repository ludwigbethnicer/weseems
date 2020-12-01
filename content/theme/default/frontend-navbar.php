<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
	<a class="navbar-brand" href="#">Navbar</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="#">Home</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Audit</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?php echo $domainhome; ?>routes/fieldaudit">Field IT</a>
					<a class="dropdown-item" href="<?php echo $domainhome; ?>routes/rprtaudit">Reports</a>
					<a class="dropdown-item" href="#">RST / MIS</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Testimonial</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Contact Us</a>
			</li>
		</ul>
		<ul class="navbar-nav my-2 my-lg-0">
			<?php
				if(empty($_SESSION["usercode"])) {
					echo '<li class="nav-item">
							<a class="btn nav-link btn-primary btn-sm m-1" href="routes/login">Login</a>
						</li>
						<li class="nav-item">
							<a class="btn nav-link btn-info btn-sm m-1" href="routes/signup">Register</a>
						</li>';
				} else {
					echo '<li class="nav-item">
							<a class="btn nav-link btn-success btn-sm m-1" href="inc/logout">Logout</a>
						</li>';
				}
			?>			
			<li class="nav-item">
				<a class="btn nav-link btn-secondary btn-sm m-1" href="">Refresh</a>
			</li>
		</ul>
	</div>
</nav>