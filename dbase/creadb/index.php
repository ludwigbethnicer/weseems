<?php

	include_once "../../inc/srvr.php";

	try {
		$conn = new PDO("mysql:host={$host};", $uname, $pw);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE DATABASE IF NOT EXISTS ".$db;
		$conn->exec($sql);
		$sql = "use ".$db;
		$conn->exec($sql);
		echo "Database Successfully Created!<br>";
		echo "<a href='../creatbl'>Install Default Data Storage.</a>";
	} catch(PDOException $e) {
	    echo "Error: ".$e->getMessage()."<br>";
	}