<?php
	$chckfledash = file_exists("../../assets/css/style.css");
	if ($chckfledash) {
		$dirbak = "../../";
	} else {
		$dirbak = "../../../";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $page_title; ?></title>
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="Expires" CONTENT="-1">
	<link rel="icon" type="image/png">
	<link rel="stylesheet" href="<?php echo $dirbak; ?>assets/fontawesome/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $dirbak; ?>assets/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $dirbak; ?>assets/css/dashboard.css">
	<link rel="stylesheet" href="<?php echo $dirbak; ?>assets/css/style.css">
	<script src="<?php echo $dirbak; ?>assets/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="<?php echo $dirbak; ?>assets/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="<?php echo $dirbak; ?>assets/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body id="myDashB" class="bg-light" data-spy="scroll" data-target=".navbar" data-offset="60" oncontextmenu="return false;">
	<!-- page-wrapper -->
	<div class="page-wrapper chiller-theme toggled">