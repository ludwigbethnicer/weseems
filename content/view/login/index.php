<?php
	include_once "../../inc/webconfig/conf.php";
	include_once "../../content/theme/".$themename."/navbar-auth.php";
?>

<div class="w360center mt-5">
	<div class="card mt-2">
		<div class="card-header">
			<label>Login</label>
		</div>
		<div class="card-body">
			<form method="post" class="needs-validation" novalidate>
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" class="form-control" id="username" placeholder="Username" name="username" autofocus required>
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Please fill out this field.</div>
				</div>

				<div class="form-group">
					<label for="passcode">Password:</label>
					<input type="password" class="form-control" id="passcode" placeholder="Password" name="passcode"  required>
					<div class="valid-feedback">Valid.</div>
					<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				
				<div class="row">
					<div class="col-sm-6 mb-2">
						<button type="submit" class="btn btn-block btn-secondary" name="btnLogin">Login <i class='fas fa-key'></i></button>
					</div>
					<div class="col-sm-6 mb-2">
						<a class="btn btn-block btn-secondary" title="Enter Username">Change Password</a>
					</div>
				</div>

				<a href="" >Forgot password?</a>
			</form>
		</div>
		<div class="card-footer"></div>
	</div>
</div>