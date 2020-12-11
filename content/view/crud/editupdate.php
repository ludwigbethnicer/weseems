<?php
	include_once "../../../content/template-part/dashboard-navbar.php";
	include_once "../../../inc/core.php";
	include_once "../../../inc/srvr.php";
	$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
?>

<main class="page-content">
	<div class="container-fluid">
		<form method="post" class="needs-validation" novalidate>
			<div class="input-group mb-3 input-group-sm">
				<div class="input-group-prepend">
					<span class="input-group-text">Fieldtxt</span>
				</div>
				<input id="idxfieldtxt" type="text" class="form-control" placeholder="Fieldtxt" name="idxfieldtxt" required value="">
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<input type="submit" name="btnUpdate" value="Update" class="btn btn-warning btn-sm">
			<a href="../../../routes/crud" class="btn btn-danger btn-sm">Close</a>
		</form>
	</div>
</main>

<?php

	try {
		if (isset($_POST['btnUpdate'])) {
			if (empty($_POST['idxfieldtxt'])) {
				$err_msg = "Please fill-up the form properly.";
			} else {
				// search for duplicate
				$stblname = "tblcrud";
				$setstr_id = "id";
				$setstr_txt = "fieldtxt";

				$qry_insert = "UPDATE {$stblname} SET {$setstr_txt}=:itxtfields WHERE {$setstr_id}=:idnow";
				$stmt_insert = $cnn->prepare($qry_insert);
				$idnow = $_GET['id'];
				$itxtfields = $_POST['idxfieldtxt'];
				$stmt_insert->bindParam(':idnow', $idnow);
				$stmt_insert->bindParam(':itxtfields', $itxtfields);
				$stmt_insert->execute();

				$err_msg = "Update successfully.";
				echo "<script>alert('".$err_msg."');</script>";
			}
		}
	} catch (PDOException $error) {
		$err_msg = $error->getMessage();
		echo "<p>Error: {$err_msg}</p>";
		die;
	}