<?php
	include_once "../../content/template-part/partner-navbar.php";
	if(empty($_SESSION["usercode"])) {
		$usercodenow = null;
		session_start();
		session_destroy();
		header("location:".$domainhome);
	} else {
		$usercodenow = $_SESSION["usercode"];
		echo $_SESSION["fullname"];
	}
?>

<h1>Audit Report</h1>