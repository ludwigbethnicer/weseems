	<footer class="container-fluid text-center footer pt-2">
		<a href="#myPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p class="m-0">Copyright &copy; <?php echo date('Y'); ?> <a href="https://www.mlhuillier.com" target="_blank" title="Visit MLhuillier, Inc. Philippines">MLhuillier</a>, Inc. Philippines. All Rights Reserved.</p>
		<ul class="nav justify-content-center">
		<?php
			if(empty($_SESSION["usercode"])) {
				echo '<li class="nav-item">
						<a class="nav-link" href="'.$domainhome.'routes/login">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="'.$domainhome.'routes/signup">Register</a>
					</li>';
			} else {
				echo '<li class="nav-item">
						<a class="nav-link" href="'.$domainhome.'inc/logout">Logout</a>
					</li>';
			}
		?>
		</ul>
	</footer>
	<script src="<?php echo $domainhome; ?>assets/js/sysconf.js"></script>
	<script src="<?php echo $domainhome; ?>assets/js/script.js"></script>
	<script id="themeScript"></script>
</body>
</html>

