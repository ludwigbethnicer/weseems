<?php
	try {
		if (isset($_POST["btnLogin"])) {
			if (empty($_POST["username"]) || empty($_POST["passcode"])) {
				echo '<div class="alert alert-danger alert-dismissible fade show">';
					echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					echo 'Please enter username and password.';
				echo '</div>';
			} else {
				$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
				$query = "SELECT * FROM tblsysuser WHERE ustatz=1 AND username=:username AND passcode=:passcode LIMIT 1";
				$statement = $cnn->prepare($query);
				$statement->execute(array(
					'username'	=>	$_POST["username"],
					'passcode'	=>	md5($_POST["passcode"])));

				$row = $statement->fetch(PDO::FETCH_ASSOC);

				$count = $statement->rowCount();
				if ($count > 0) {
					$usercode = $row['usercode'];
					$fullname = $row['fullname'];
					$ulevpos = $row['ulevpos'];
					$surname = $row['lname'];
					$firstname = $row['fname'];
					$middlename = $row['mname'];
					$uposition = $row['xposition'];
					
					$_SESSION["usercode"] = $usercode;
					$_SESSION["username"] = $_POST["username"];
					$_SESSION["fullname"] = $fullname;
					$_SESSION["ulevpos"] = $ulevpos;

					$_SESSION["surname"] = $surname;
					$_SESSION["firstname"] = $firstname;
					$_SESSION["middlename"] = $middlename;
					$_SESSION["postitle"] = $uposition;
					
					header('location:../../');
				} else {
					echo '<div class="alert alert-danger alert-dismissible fade show">';
						echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
						echo 'Either your account is disbabled, inactive, not verified or wrong username and password.';
					echo '</div>';
				}
			}
		}
	} catch (PDOException $error) {
		die('ERROR: ' . $exception->getMessage());
	}
?>