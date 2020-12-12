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
				<input id="idxfieldtxt" type="text" class="form-control" placeholder="Fieldtxt" name="idxfieldtxt" required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="row justify-content-end">
				<input type="submit" name="btnSave" value="Save" class="btn btn-info btn-sm m-2">
				<a href="../../../routes/crud" class="btn btn-danger btn-sm m-2">Close</a>
			</div>
		</form>
	</div>
</main>

<?php

	try {
		if (isset($_POST['btnSave'])) {
			if (empty($_POST['idxfieldtxt'])) {
				$err_msg = "Please fill-up the form properly.";
			} else {
				// search for duplicate
				$stblname = "tblcrud";
				$dupli_txt = "fieldtxt";
				$qry_dupli = "SELECT {$dupli_txt} FROM {$stblname} WHERE {$dupli_txt}=:txtfields";
				$stmt_dupli = $cnn->prepare($qry_dupli);
				$txtfields = $_POST['idxfieldtxt'];
				$stmt_dupli->bindParam(':txtfields', $txtfields);
				$stmt_dupli->execute();
				$rw_counts = $stmt_dupli->rowCount();

				if ($rw_counts > 0) {
					$err_msg = "Record already exist.";
					echo "<script>alert('".$err_msg."');</script>";
				} else {
					$qry_insert = "INSERT INTO {$stblname} SET {$dupli_txt}=:itxtfields";
					$stmt_insert = $cnn->prepare($qry_insert);
					$itxtfields = $_POST['idxfieldtxt'];
					$stmt_insert->bindParam(':itxtfields', $itxtfields);
					$stmt_insert->execute();

					$err_msg = "Save successfully.";
					echo "<script>alert('".$err_msg."');</script>";
				}
			}
		}
	} catch (PDOException $error) {
		$err_msg = $error->getMessage();
		echo "<p>Error: {$err_msg}</p>";
		die;
	}