<?php
	session_start();
	$loggedIn = isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true;

	if (isset($_POST['loginn'])) {
		$storedUsername = 'admin@gmail.com';
		$storedPassword = '123';

		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username === $storedUsername && $password === $storedPassword) {
			$_SESSION['loggedIn'] = true;
			$loggedIn = true;
			header('Location: index.php');

		} else {
			$_SESSION['loggedIn'] = false;
			$loggedIn = false;
			header('Location: index.php');
			// sleep(2);
			echo "<script> alert('Invalid credentials. Please try again.');</script>";
			// echo '';
		}
	}
?>
