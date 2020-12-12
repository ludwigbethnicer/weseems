<?php
	include_once "../../content/template-part/partner-navbar.php";
?>

<div class="container">
	<div class="w360center">
		<div class="card mt-4">
			<div class="card-header text-center">
				<label>Signup</label>
			</div>
			<div class="card-body">
				<form method="post" class="needs-validation" novalidate>
					<div class="form-group">
						<label for="younickname">Username:</label>
						<div class="input-group mb-3">
							<input type="text" class="form-control" id="younickname" placeholder="Username" name="younickname" required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>
					</div>

					<?php
						include_once "../../inc/signup/index.php";
					?>

					<div class="row">
						<div class="col-sm-6 mb-2"></div>
						<div class="col-sm-6 mb-2">
							<button type="submit" class="btn btn-block btn-info" name="btnSubmit">Submit</button>
						</div>
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