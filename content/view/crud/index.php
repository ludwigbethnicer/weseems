<?php
	include_once "../../content/template-part/dashboard-navbar.php";
?>

<script>
	function showResult(str) {
		if (str == "") {
			location.reload();
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("viewRecordz").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "../../content/view/crud/filter.php?searchforx=" + str, true);
			xmlhttp.send();
		}
	}

	function grpResult(str) {
		if (str == "") {
			location.reload();
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("viewRecordz").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "../../content/view/crud/groupby.php?groupbyx=" + str, true);
			xmlhttp.send();
		}
	}

	function dateResultx(str) {
		if (str == "") {
			location.reload();
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("viewRecordz").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "../../content/view/crud/grpbydate.php?fltrbydate=" + str, true);
			xmlhttp.send();
		}
	}

	function trash(id) {
		var answer = confirm('Delete record Ctrl#'+id+' ?');
		if (answer) {
			window.location = '../../content/view/crud/deteled.php?upidid=' + id;
		} 
	}
</script>

<main class="page-content">
	<div class="container-fluid">
		<div class="d-flex">
			<h4 class="mr-2 mb-2">CRUD</h4>
			<button type="button" class="btn btn-outline-info btn-sm mr-2 mb-2" data-toggle="modal" data-target="#modAddNew">
				Add New
			</button>

			<div class="mr-2">
				<form>
					<div class="input-group input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">Filter</span>
						</div>
						<input type="text" class="form-control" id="searchforx" name="searchforx" onkeyup="showResult(this.value);" placeholder="by text">
					</div>
				</form>
			</div>

			<div class="mr-2">
				<form>
					<div class="input-group input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">Group by</span>
						</div>
						<input type="text" class="form-control" id="groupbyx" name="groupbyx" onkeyup="grpResult(this.value);" list="lstgroupby" placeholder="text">
						<datalist id="lstgroupby">
							<?php
								$tblname = "tblcrud";
								$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
								$qry_grpby = $cnn->prepare("SELECT fieldtxt FROM {$tblname} GROUP BY fieldtxt ORDER BY fieldtxt ASC");
								$qry_grpby->execute();
								$rslt_grpby = $qry_grpby->setFetchMode(PDO::FETCH_ASSOC);
								foreach ($qry_grpby as $row_grpby) {
									echo "<option value='".$row_grpby['fieldtxt']."'>";
								}
							?>
						</datalist>
					</div>
				</form>
			</div>

			<div class="mr-2">
				<form>
					<div class="input-group input-group-sm date" id="datetimepicker1">
						<div class="input-group-prepend">
							<span class="input-group-text">Date filter</span>
						</div>
						<input type="date" class="form-control" id="fltrbydate" name="fltrbydate" onchange="dateResultx(this.value);">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</form>
			</div>
		</div>

		<div id="viewRecordz" class="table-responsive-sm">
			<?php include_once "viewall.php"; ?>
		</div>

		<!-- The Modal -->
		<div class="modal fade" id="modAddNew">
			<div class="modal-dialog modal-dialog-scrollable modal-md">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Add new record</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="needs-validation" novalidate>
							<div class="input-group mb-3 input-group-sm">
								<div class="input-group-prepend">
									<span class="input-group-text">Fieldtxt</span>
								</div>
								<input id="idxfieldtxt" type="text" class="form-control" placeholder="Fieldtxt" name="idxfieldtxt" required>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
							</div>
							<hr>
							<?php  
								if (isset($error_message)) {
									echo "<div class='alert alert-danger alert-dismissible mb-0 fade show'><button type='button' class='close' data-dismiss='alert'>&times;</button>".$err_msg."</div>";
								}
							?>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<input type="submit" name="btnSave" value="Save" class="btn btn-info btn-sm">
						<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- The Modal -->
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
				$qry_dupli = "SELECT * FROM {$stblname} WHERE {$dupli_txt}=:txtfields";
				$stmt_dupli = $cnn->prepare($qry_dupli);
				$txtfields = $_POST['idxfieldtxt'];
				$stmt_dupli->bindParam(':txtfields', $txtfields);
				$stmt_dupli->execute();
				$rw_counts = $stmt_dupli->rowCount();

				if ($rw_counts > 0) {
					$err_msg = "Record already exist.";
				}
			}
		}
	} catch (PDOException $error) {
		$err_msg = $error->getMessage();
	}