<?php

	include_once('connection.php');

	$sql = "INSERT INTO users (email, password)
			VALUES (:email, :password);";

$password=md5($_POST['password']);

	try {
		$st = $conn->prepare($sql);
<<<<<<< HEAD
		$st->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
		$st->bindValue(':password', md5($_POST['password']), PDO::PARAM_STR);
=======
		$st->bindValue(':name', $_POST['username'], PDO::PARAM_STR);
		$st->bindValue(':password', $password, PDO::PARAM_STR);
>>>>>>> origin/master
		$st->execute();
	} catch (PDOException $e) {
		echo "Server error - try again! " . $e->getMessage();
	}

	$conn = null;
	
	header('Location:' . 'signUpCompletion.php');

?>