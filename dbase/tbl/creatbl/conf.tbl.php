<?php

	include_once "../../inc/cnndb.php";
	$tblname = "conf";
	$tblname2 = strtoupper($tblname);
	$TableTitle = "Configuration";
	$msg_insert = "Insert default data for {$TableTitle} <br>";

	$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
	$chksql = "SELECT 1 FROM {$tblname} LIMIT 1";
	$chksql = $cnn->query($chksql);

	if($chksql) {
		echo "Database Table: {$TableTitle}; Already exist!<br>";
	} else {
		try {
			$sql = "CREATE TABLE IF NOT EXISTS {$tblname2}(
				id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
				cmpny_name VARCHAR(254) NOT NULL, 
				sys_name VARCHAR(254) NOT NULL, 
				sys_ver VARCHAR(254) NOT NULL, 
				sys_logo VARCHAR(254) NOT NULL, 
				navbar_logo VARCHAR(254) NOT NULL, 
				favicon VARCHAR(254) NOT NULL, 
				quote_title VARCHAR(254) NOT NULL, 
				ceo_pres VARCHAR(254) NOT NULL, 
				memail VARCHAR(254) NOT NULL, 
				telno VARCHAR(254) NOT NULL, 
				mobileno VARCHAR(254) NOT NULL, 
				maddress TEXT NOT NULL, 
				idletime INT(11) NOT NULL, 
				themename VARCHAR(254) NOT NULL, 
				domainhome VARCHAR(254) NOT NULL, 
				created DATETIME NOT NULL, 
				primary_color VARCHAR(254) NOT NULL, 
				second_color VARCHAR(254) NOT NULL, 
				third_color VARCHAR(254) NOT NULL, 
				forth_color VARCHAR(254) NOT NULL, 
				fifth_color VARCHAR(254) NOT NULL, 
				sixth_color VARCHAR(254) NOT NULL, 
				seventh_color VARCHAR(254) NOT NULL, 
				eight_color VARCHAR(254) NOT NULL, 
				ninght_color VARCHAR(254) NOT NULL, 
				tenth_color VARCHAR(254) NOT NULL, 
				geo_map text NOT NULL, 
				modified TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp());";
			$cnn->exec($sql);
			echo "Database Table created successfully: {$TableTitle}.<br>";

			$sql_insert = "INSERT INTO {$tblname} (
					cmpny_name, 
					sys_name, 
					sys_ver, 
					sys_logo, 
					navbar_logo, 
					favicon, 
					quote_title, 
					ceo_pres, 
					memail, 
					telno, 
					mobileno, 
					maddress, 
					themename, 
					domainhome, 
					idletime, 
					geo_map, 
					created) 
				VALUES (
					'Company', 
					'Title', 
					'1.0.0', 
					'Logo.png', 
					'Logo.svg', 
					'favicon.ICO', 
					'Quote, saying or moto', 
					'Owner T. Businness', 
					'info@contact.com', 
					'+32 333 2469', 
					'+63 909 482 6025', 
					'Sed ut perspiciatis unde omnis iste natus', 
					'default', 
					'/weseems/', 
					5, 
					'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sph!4v1607746633295!5m2!1sen!2sph', 
					current_timestamp()
				)
				";
			$cnn->exec($sql_insert);
			echo $msg_insert;
		} catch(PDOException $e) {
			echo $e->getMessage()."<br>";
		}
		$cnn = null;
	}