<?php
	include_once "../../content/theme/".$themename."/auth-navbar.php";
?>

<div class="container">
	<div class="w360center">
		<div class="card mt-4">
			<div class="card-header text-center">
				<label>Login</label>
				<a href="" class="position-absolute mr-3" style="right: 0;">Refresh</a>
			</div>
			<div class="card-body">
				<form method="post" class="needs-validation" novalidate>
					<div class="form-group">
						<label for="username">Username:</label>
						<div class="input-group mb-3">
							<input type="text" class="form-control" id="username" placeholder="Username" name="username" autofocus required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>
					</div>

					<div class="form-group">
						<label for="passcode">Password:</label>
						<div class="input-group mb-3" id="show_hide_password">
							<input type="password" class="form-control password" id="passcode" placeholder="Password" name="passcode"  required>
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-eye-slash" aria-hidden="true" onclick="PwHideShow()"></i>
								</span>
							</div>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>
					</div>

					<?php
						include_once "../../inc/login/index.php";
					?>
					
					<div class="row">
						<div class="col-sm-6 mb-2"></div>
						<div class="col-sm-6 mb-2">
							<button type="submit" class="btn btn-block btn-secondary" name="btnLogin">Login <i class='fas fa-key'></i></button>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6 mb-2">
							<a href="../../routes/forgotpw">Forgot password?</a></i>
						</div>
						<div class="col-sm-6 mb-2"></div>
					</div>				
				</form>
			</div>
			<div class="card-footer">
				<div class="row">
					<div class="col-sm-6 mb-2"></div>
					<div class="col-sm-6 mb-2 text-right">
						<a href="../../" class="text-dark text-decoration-none">
							<i>&#8592;</i> Back to Homepage
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>