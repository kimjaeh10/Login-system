<?php
	if (isset($_POST['login-submit'])) {
		require 'dbh.inc.php';

		$emailuid = $_POST['emailuid'];
		$password = $_POST['pwd'];

		if (empty($emailuid) || empty($password)) {
			header("Location: ../index.php?error=emptyfields");
			exit();
		}
		else {
			$sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../index.php?error=sqlerror");
				exit();
			}
			else {
				mysqli_stmt_bind_param($stmt, "ss", $emailuid, $password);
			}
		}
	}
	else {
		header("Location: ../index.php")
		exit();
	}
?>
